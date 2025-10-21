<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        $categorias = Categoria::withCount('productos')->paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    // Formulario crear categoría
    public function create()
    {
        return view('categorias.create');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100|unique:Categorias',
            'descripcion' => 'nullable|string|max:255'
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoría registrada correctamente.');
    }

    // Formulario editar
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    // Actualizar categoría
    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:100|unique:Categorias,nombre,' . $categoria->id,
            'descripcion' => 'nullable|string|max:255'
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada correctamente.');
    }

    // Eliminar categoría
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente.');
    }
}
