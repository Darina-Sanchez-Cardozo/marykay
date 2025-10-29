<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacenista extends Model
{
    use HasFactory;

    protected $table = 'almacenistas';

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
}
