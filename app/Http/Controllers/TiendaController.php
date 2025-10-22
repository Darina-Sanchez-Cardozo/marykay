<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index()
    {
        // Trae todas las categorías con sus productos asociados
        $categorias = Categoria::with('productos')->get();

        // Envía los datos a la vista
        return view('tienda.categorias', compact('categorias'));
    }
}
