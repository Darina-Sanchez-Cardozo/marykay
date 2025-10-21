<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Campania;


class ProductoController extends Controller
{ 

    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::with(['categoria', 'campania'])->paginate(10);
        return view('productos.index', compact('productos'));
    }

    // Formulario para crear
    public function create()
    {
        $categorias = Categoria::all();
        $campanias = Campania::all();
        return view('productos.create', compact('categorias', 'campanias'));
    }

    // Guardar producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'codigo_barras' => 'required|string|unique:Productos',
            'precio_mayoreo' => 'required|numeric',
            'precio_menudeo' => 'required|numeric',
            'existencias' => 'required|integer',
            'estado_producto' => 'required',

        ]);
       Producto::create($request->all());

    return redirect()->route('productos.index')
        ->with('success', 'Producto registrado correctamente.');
    }

    // Formulario para editar
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $campanias = Campania::all();
        return view('productos.edit', compact('producto', 'categorias', 'campanias'));
    }

    // Actualizar producto
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar producto
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }

    // Mostrar productos en la tienda consultora (dinámico)
    public function mostrarTienda()
    {
        $productos = Producto::where('estado_producto', 'Activo')->get();
        return view('tienda_consultora', compact('productos'));
    }

  

    
}
