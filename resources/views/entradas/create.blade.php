@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4 fw-bold">Registrar nueva entrada de producto (Almacen)</h3>

    <form action="{{ route('entradas.store') }}" method="POST" class="mx-auto" style="max-width: 700px;">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Producto</label>
            <select name="producto_id" class="form-select" required>
                <option value="">Seleccione un producto</option>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 d-flex gap-3">
            <div class="flex-fill">
                <label class="form-label fw-semibold">Cantidad recibida</label>
                <input type="number" name="cantidad" class="form-control" required min="1">
            </div>
            <div class="flex-fill">
                <label class="form-label fw-semibold">Precio de compra</label>
                <input type="number" step="0.01" name="precio_entrada" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Descripción breve</label>
            <textarea name="descripcion" class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Almacenista que recibe</label>
            <select name="almacenista_id" class="form-select" required>
                <option value="">Seleccione un almacenista</option>
                @foreach($almacenistas as $alm)
                    <option value="{{ $alm->id }}">{{ $alm->persona->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark px-4">Guardar</button>
            <a href="{{ route('entradas.index') }}" class="btn btn-secondary px-4">Cancelar</a>
        </div>
    </form>

    <footer class="text-center mt-4 text-muted">
        © 2025 Mary Kay Digital — Sistema de Venta de Maquillaje
    </footer>
</div>
@endsection
