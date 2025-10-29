@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4 fw-bold">Entrada de Productos 💼</h3>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('entradas.create') }}" class="btn btn-rosado">
            ➕ Añadir producto
        </a>
    </div>

    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Nombre del producto</th>
                <th>Cantidad recibida</th>
                <th>Precio de compra</th>
                <th>Fecha de compra</th>
                <th>Descripción breve</th>
                <th>Almacenista que recibe</th>
            </tr>
        </thead>
        <tbody>
            @forelse($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->producto->nombre ?? 'Producto eliminado' }}</td>
                    <td>{{ $entrada->cantidad }} pz</td>
                    <td>${{ number_format($entrada->precio_entrada, 2) }}</td>
                    <td>{{ \Carbon\Carbon::parse($entrada->fecha_entrada)->format('d M Y') }}</td>
                    <td>{{ $entrada->descripcion }}</td>
                    <td>{{ $entrada->almacenista->persona->nombre ?? '—' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-muted">No se han registrado entradas aún.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $entradas->links() }}
    </div>
</div>
@endsection
