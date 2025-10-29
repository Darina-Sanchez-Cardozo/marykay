<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campania;

class CampaniaController extends Controller
{
    // Mostrar formulario
    public function create()
    {
        return view('campanias.create');
    }

    // Guardar campaña
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'estado' => 'required|in:Activa,Cerrada',
        ], [
            'fecha_fin.after_or_equal' => 'La fecha de fin no puede ser anterior a la fecha de inicio.',
        ]);

        Campania::create([
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'estado' => $request->estado,
        ]);

        return redirect()->route('campanias.create')->with('success', ' Campaña registrada correctamente.');
    }
    public function index()
    {
    // Recupera todas las campañas, ordenadas por fecha de inicio
    $campanias = Campania::orderBy('fecha_inicio', 'desc')->get();

    // Retorna la vista de listado
    return view('campanias.index', compact('campanias'));
    }
    // Mostrar formulario de edición
    public function edit($id)
    {
    $campania = Campania::findOrFail($id);
    return view('campanias.edit', compact('campania'));
    }
    // Actualizar los datos de la campaña
    public function update(Request $request, $id)
    {
    $request->validate([
        'nombre' => 'required|string|max:100',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        'estado' => 'required|in:Activa,Cerrada',
    ]);

    $campania = Campania::findOrFail($id);
    $campania->update($request->all());

    return redirect()->route('campanias.index')
        ->with('success', 'Campaña actualizada correctamente.');
    }
    public function show($id)
{
    // Busca la campaña por ID
    $campania = Campania::findOrFail($id);

    // Retorna la vista para mostrar los detalles
    return view('campanias.show', compact('campania'));
}

}
