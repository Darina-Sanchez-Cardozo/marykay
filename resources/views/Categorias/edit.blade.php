@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">Editar Categoría</h3>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción:</label>
            <textarea name="descripcion" rows="3" class="form-control">{{ $categoria->descripcion }}</textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-primary">Actualizar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </form>
</div>
@endsection
