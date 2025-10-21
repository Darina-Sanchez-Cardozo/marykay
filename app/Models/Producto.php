<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Campania;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

 	public $timestamps = false;

    protected $fillable = [
    'nombre',
    'codigo_barras',
    'descripcion',
    'precio_mayoreo',
    'precio_menudeo',
    'existencias',        
    'estado_producto',
    'categoria_id',
    'campania_id'
];

    // Un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
    public function campania()
    {
        return $this->belongsTo(Campania::class, 'campania_id');
    }
}
