@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">Detalles de la campaña</h3>

    <div class="card p-4 shadow">
        <h5><strong>Nombre:</strong> {{ $campania->nombre }}</h5>
        <p><strong>Fecha de inicio:</strong> {{ $campania->fecha_inicio }}</p>
        <p><strong>Fecha de fin:</strong> {{ $campania->fecha_fin }}</p>
        <p><strong>Estado:</strong> {{ $campania->estado }}</p>

        <a href="{{ route('campanias.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</div>
@endsection
