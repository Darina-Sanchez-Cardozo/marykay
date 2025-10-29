<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Clientes';
    public $timestamps = false;

    protected $fillable = [
        'persona_id',
    ];

    // Relación con la tabla Personas
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }

    // Relación con ventas
    public function ventas()
    {
        return $this->hasMany(VentaCliente::class, 'cliente_id');
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }

}
