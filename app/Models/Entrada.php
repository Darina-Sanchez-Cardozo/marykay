<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = 'entradas'; // Nombre exacto de tu tabla

    protected $fillable = [
        'producto_id',
        'almacenista_id',
        'cantidad',
        'fecha_entrada'
    ];

    // Relaciones
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function almacenista()
    {
        return $this->belongsTo(Almacenista::class, 'almacenista_id');
    }
}
