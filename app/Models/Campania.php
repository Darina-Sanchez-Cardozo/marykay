<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campania extends Model
{
    use HasFactory;

    protected $table = 'campanias'; // Nombre de la tabla en tu base de datos

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin'
    ];

    // Relación: una campaña puede tener muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'campania_id');
    }
}
