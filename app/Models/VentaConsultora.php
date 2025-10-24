<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaConsultora extends Model
{
    use HasFactory;

    protected $table = 'VentasConsultoras';
    protected $fillable = ['cliente_id', 'fecha_venta', 'estado', 'total'];
    public $timestamps = false;

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_consultora_id');
    }

    public function resenas()
    {
        return $this->hasMany(AsignaResena::class, 'venta_consultora_id');
    }
}
