@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">Editar Producto</h3>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Código de barras:</label>
                <input type="text" name="codigo_barras" class="form-control" value="{{ $producto->codigo_barras }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio Mayoreo:</label>
                <input type="number" step="0.01" name="precio_mayoreo" class="form-control" value="{{ $producto->precio_mayoreo }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio Menudeo:</label>
                <input type="number" step="0.01" name="precio_menudeo" class="form-control" value="{{ $producto->precio_menudeo }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Existencias:</label>
                <input type="number" name="existencias" class="form-control" value="{{ $producto->existencias }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Estado:</label>
                <select name="estado_producto" class="form-select">
                    <option value="Activo" {{ $producto->estado_producto == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $producto->estado_producto == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                    <option value="En Pausa" {{ $producto->estado_producto == 'En Pausa' ? 'selected' : '' }}>En Pausa</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Categoría:</label>
                <select name="categoria_id" class="form-select">
                    <option value="">-- Seleccionar --</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}" {{ $producto->categoria_id == $cat->id ? 'selected' : '' }}>{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Campaña:</label>
                <select name="campania_id" class="form-select">
                    <option value="">-- Seleccionar --</option>
                    @foreach($campanias as $camp)
                        <option value="{{ $camp->id }}" {{ $producto->campania_id == $camp->id ? 'selected' : '' }}>{{ $camp->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Descripción:</label>
                <textarea name="descripcion" rows="3" class="form-control">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="col-12 text-center">
                <button class="btn btn-success">Actualizar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
