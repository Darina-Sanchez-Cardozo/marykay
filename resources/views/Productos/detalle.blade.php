@extends('layouts.app')

@section('content')
<div class="container mt-4">

    {{-- ====== Sección principal del producto ====== --}}
    <div class="row">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/productos/'.$producto->codigo_barras.'.jpg') }}" 
                 alt="{{ $producto->nombre }}" class="img-fluid rounded shadow-sm mb-3" style="max-height: 380px;">

            <div class="d-flex justify-content-center gap-2 mt-2">
                @for($i = 1; $i <= 5; $i++)
                    <img src="{{ asset('img/productos/'.$producto->codigo_barras.'_'.$i.'.jpg') }}" 
                         alt="miniatura" width="60" height="60" class="border rounded">
                @endfor
            </div>
        </div>

        <div class="col-md-7">
            <h3 class="fw-bold text-primary">{{ $producto->nombre }}</h3>
            <p class="text-muted">{{ $producto->descripcion }}</p>

            <div class="mb-2">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa{{ $i <= round($promedio) ? 's' : 'r' }} fa-star text-warning"></i>
                @endfor
                <small class="text-muted">({{ number_format($promedio,1) }} / 5)</small>
            </div>

            <h4 class="fw-semibold text-dark mb-3">${{ number_format($producto->precio_menudeo, 2) }} pesos</h4>

            <p class="text-secondary">
                Algunos días son perfectos para expresar tu personalidad, y este producto te ayuda a lograrlo.
                Ideal para {{ strtolower($producto->categoria->nombre ?? 'todo tipo de piel') }}.
            </p>

            <form method="POST" action="#">
                @csrf
                <button type="button" class="btn btn-dark px-4">Agregar al carrito 🛒</button>
            </form>
        </div>
    </div>

    <hr class="my-5">

    {{-- ====== Descripción extendida ====== --}}
    <div class="text-center mb-5">
        <blockquote class="blockquote">
            “{{ $producto->descripcion ?? 'La fragancia perfecta para resaltar la confianza y elegancia de cada mujer.' }}”
        </blockquote>
    </div>

    {{-- ====== Sección de reseñas ====== --}}
    <h4 class="fw-bold mb-4">Opiniones de los clientes 💬</h4>
    @forelse($reseñas as $r)
        <div class="border rounded p-3 mb-3">
            <div class="d-flex align-items-center mb-2">
                <i class="fa-regular fa-circle-user fa-2x me-2 text-secondary"></i>
                <div>
                    <strong>{{ $r->ventaCliente->cliente->persona->nombre ?? 'Usuario' }}</strong>
                    <small class="text-muted d-block">{{ \Carbon\Carbon::parse($r->fecha)->format('d M Y') }}</small>
                </div>
            </div>
            <div class="ms-4">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa{{ $i <= $r->puntaje ? 's' : 'r' }} fa-star text-warning"></i>
                @endfor
                <p class="mt-2 text-secondary">{{ $r->reseña }}</p>
            </div>
        </div>
    @empty
        <p class="text-muted">Aún no hay reseñas para este producto.</p>
    @endforelse

    {{-- ====== Footer ====== --}}
    <footer class="text-center mt-5 text-muted">
        © 2025 Mary Kay Digital — Sistema de Venta de Maquillaje
    </footer>
</div>
@endsection
