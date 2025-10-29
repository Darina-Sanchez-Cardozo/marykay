<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\AsignaResena;

class ProductoDetalleController extends Controller
{
    // Muestra un producto con sus reseñas
    public function show($id)
    {
        $producto = Producto::with(['categoria', 'campania'])->findOrFail($id);

        // Reseñas relacionadas con ventas de ese producto
        $reseñas = AsignaResena::whereHas('ventaCliente.detalles', function ($q) use ($id) {
                $q->where('producto_id', $id);
            })
            ->with('ventaCliente.cliente.persona')
            ->orderBy('fecha', 'desc')
            ->get();

        $promedio = $reseñas->avg('puntaje') ?? 0;

        return view('productos.detalle', compact('producto', 'reseñas', 'promedio'));
        
    }
    public function ventaCliente()
        {
            return $this->belongsTo(VentaCliente::class, 'venta_cliente_id');
        }

}
