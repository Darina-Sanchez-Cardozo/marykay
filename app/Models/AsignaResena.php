<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaResena extends Model
{
    use HasFactory;

    protected $table = 'AsignaReseña';
    protected $fillable = [
        'venta_cliente_id',
        'venta_consultora_id',
        'reseña',
        'puntaje',
        'fecha'
    ];
    public $timestamps = false;
}
