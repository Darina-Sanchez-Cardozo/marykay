<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'apellidos', 'email', 'password',
        'fecha_nacimiento', 'telefono', 'direccion',
        'rol', 'imagen'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
