<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaCliente;
use App\Models\VentaConsultora;
use App\Models\AsignaResena;
use Carbon\Carbon;

class ResenaController extends Controller
{
    // Mostrar todas las compras (clientes o consultoras)
    public function index()
    {
        $ventasClientes = VentaCliente::with('detalles.producto', 'resenas')->orderBy('fecha_venta', 'desc')->get();
        $ventasConsultoras = VentaConsultora::with('detalles.producto', 'resenas')->orderBy('fecha_venta', 'desc')->get();

        return view('compras.mis_compras', compact('ventasClientes', 'ventasConsultoras'));
    }

    // Guardar una reseña
    public function store(Request $request)
    {
        $request->validate([
            'reseña' => 'required|string|max:500',
            'puntaje' => 'required|integer|min:1|max:5',
        ]);

        AsignaResena::create([
            'venta_cliente_id' => $request->venta_cliente_id,
            'venta_consultora_id' => $request->venta_consultora_id,
            'reseña' => $request->reseña,
            'puntaje' => $request->puntaje,
            'fecha' => Carbon::now()->format('Y-m-d'),
        ]);

        return back()->with('success', ' Reseña registrada correctamente.');
        return redirect()->route('compras.index')->with('success', ' Tu reseña ha sido registrada correctamente.');
    }
}
