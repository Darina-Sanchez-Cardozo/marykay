@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="text-center mb-4 fw-bold">
        Campañas Mary Kay 💋
    </h3>

    {{-- Mensaje de confirmación --}}
    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    {{-- Botón agregar campaña --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('campanias.create') }}" class="btn btn-rosado">
            ➕ Nueva Campaña
        </a>
    </div>

    {{-- Tabla de campañas --}}
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($campanias as $campania)
                <tr>
                    <td>{{ $campania->id }}</td>
                    <td>{{ $campania->nombre }}</td>
                    <td>{{ \Carbon\Carbon::parse($campania->fecha_inicio)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($campania->fecha_fin)->format('d/m/Y') }}</td>
                    <td>
                        @if($campania->estado == 'Activa')
                            <span class="badge bg-success">{{ $campania->estado }}</span>
                        @else
                            <span class="badge bg-secondary">{{ $campania->estado }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('campanias.edit', $campania->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('campanias.destroy', $campania->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar campaña?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-muted">No hay campañas registradas todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <footer class="text-center mt-4 text-muted">
        © 2025 Mary Kay Digital — Sistema de Venta de Maquillaje
    </footer>
</div>
@endsection
