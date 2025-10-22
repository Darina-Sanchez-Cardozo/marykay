@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">🛍️ Categorías Mary Kay</h2>

    @foreach ($categorias as $categoria)
        <div class="mb-5">
            <h3 class="text-pink-600 fw-bold">{{ strtoupper($categoria->nombre) }}</h3>
            <p class="text-muted">{{ $categoria->descripcion }}</p>

            <div class="row">
                @forelse ($categoria->productos as $producto)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ $producto->imagen_url ?? asset('img/producto-default.jpg') }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text text-muted">${{ number_format($producto->precio, 2) }}</p>
                                <a href="#" class="btn btn-outline-dark w-100">Ver más</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-secondary">No hay productos en esta categoría.</p>
                @endforelse
            </div>
        </div>
        <hr>
    @endforeach
</div>
@endsection
