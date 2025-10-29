<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Producto;
use App\Models\Almacenista;
use Carbon\Carbon;

class EntradaController extends Controller
{
    // Mostrar listado de entradas
    public function index()
    {
        $entradas = Entrada::with(['producto', 'almacenista.persona'])
            ->orderBy('fecha_entrada', 'desc')
            ->paginate(8);

        return view('entradas.index', compact('entradas'));
    }

    // Mostrar formulario para agregar nueva entrada
    public function create()
    {
        $productos = Producto::where('estado_producto', 'Activo')->get();
        $almacenistas = Almacenista::with('persona')->get();
        return view('entradas.create', compact('productos', 'almacenistas'));
    }

    // Guardar nueva entrada
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|integer',
            'cantidad' => 'required|integer|min:1',
            'precio_entrada' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string|max:255',
            'almacenista_id' => 'required|integer'
        ]);

        // Guardar registro
        Entrada::create([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'precio_entrada' => $request->precio_entrada,
            'fecha_entrada' => Carbon::now()->format('Y-m-d'),
            'descripcion' => $request->descripcion,
            'almacenista_id' => $request->almacenista_id
        ]);

        // Actualizar existencias
        $producto = Producto::find($request->producto_id);
        $producto->existencias += $request->cantidad;
        $producto->save();

        return redirect()->route('entradas.index')->with('success', 'Entrada registrada correctamente.');
    }
}
