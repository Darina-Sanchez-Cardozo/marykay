<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaCliente extends Model
{
    use HasFactory;

    protected $table = 'VentasClientes';
    protected $fillable = ['cliente_id', 'fecha_venta', 'estado', 'total'];
    public $timestamps = false;

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_cliente_id');
    }

    public function resenas()
    {
        return $this->hasMany(AsignaResena::class, 'venta_cliente_id');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_cliente_id');
    }

}
