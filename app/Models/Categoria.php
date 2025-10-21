<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto; // importar el modelo relacionado


class Categoria extends Model
{
    use HasFactory;

    // Asegurar el nombre REAL de la tabla
    protected $table = 'categorias';

    protected $fillable = ['nombre','descripcion'];

    // Una categoría tiene muchos productos
    public function productos()
    {
        // FK en productos = categoria_id ; PK local = id
        return $this->hasMany(Producto::class, 'categoria_id', 'id');
    }
}
