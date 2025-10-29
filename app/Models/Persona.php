<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'Personas';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'telefono',
        'fecha_nacimiento',
        'correo_electronico',
        'estado'
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'persona_id');
    }

    public function consultora()
    {
        return $this->hasOne(Consultora::class, 'persona_id');
    }

    public function almacenista()
    {
        return $this->hasOne(Almacenista::class, 'persona_id');
    }
}
