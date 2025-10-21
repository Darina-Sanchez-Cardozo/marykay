@extends('layouts.app')

@section('title', 'Nueva Categoría')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">Registrar Nueva Categoría</h3>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre de la Categoría:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción:</label>
            <textarea name="descripcion" rows="3" class="form-control"></textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-success">Guardar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
