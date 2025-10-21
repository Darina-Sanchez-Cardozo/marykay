@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">Registrar nuevo producto</h3>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Código de barras:</label>
                <input type="text" name="codigo_barras" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio Mayoreo:</label>
                <input type="number" name="precio_mayoreo" class="form-control" step="0.01" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio Menudeo:</label>
                <input type="number" name="precio_menudeo" class="form-control" step="0.01" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Existencias:</label>
                <input type="number" name="existencias" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Estado:</label>
                <select name="estado_producto" class="form-select">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                    <option value="En Pausa">En Pausa</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Categoría:</label>
                <select name="categoria_id" class="form-select">
                    <option value="">-- Seleccionar --</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Campaña:</label>
                <select name="campania_id" class="form-select">
                    <option value="">-- Seleccionar --</option>
                    @foreach($campanias as $camp)
                        <option value="{{ $camp->id }}">{{ $camp->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Descripción:</label>
                <textarea name="descripcion" rows="3" class="form-control"></textarea>
            </div>

            <div class="col-12 text-center">
                <button class="btn btn-success">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
