@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h3 class="fw-bold mb-4 text-center">🛍️ Mis Compras</h3>

  @if (session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @endif

  {{-- CLIENTES --}}
  @foreach($ventasClientes as $venta)
    <div class="card mb-4 shadow-sm p-3">
      <h6 class="fw-bold mb-3">Venta al Cliente — {{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y') }}</h6>

      @foreach($venta->detalles as $detalle)
        <div class="d-flex align-items-start border-bottom pb-3 mb-3">
          <div class="me-3">
            <img src="{{ asset('img/producto.png') }}" width="90" class="rounded">
          </div>
          <div class="flex-grow-1">
            <h6 class="fw-bold">{{ $detalle->producto->nombre ?? 'Producto sin nombre' }}</h6>
            <p class="text-muted small">Cantidad: {{ $detalle->cantidad }}</p>

            <form method="POST" action="{{ route('resenas.store') }}">
              @csrf
              <input type="hidden" name="venta_cliente_id" value="{{ $venta->id }}">

              <div class="mb-2">
                <label class="small">¿Qué tal te pareció el producto?</label>
                <select name="puntaje" class="form-select w-auto d-inline-block ms-2" required>
                  <option value="5">⭐⭐⭐⭐⭐</option>
                  <option value="4">⭐⭐⭐⭐</option>
                  <option value="3">⭐⭐⭐</option>
                  <option value="2">⭐⭐</option>
                  <option value="1">⭐</option>
                </select>
              </div>

              <textarea name="reseña" class="form-control mb-2" placeholder="Escribe tu opinión..." rows="2"></textarea>
              <button type="submit" class="btn btn-dark btn-sm">Agregar reseña</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

  {{-- CONSULTORAS --}}
  @foreach($ventasConsultoras as $venta)
    <div class="card mb-4 shadow-sm p-3">
      <h6 class="fw-bold mb-3">Venta a Consultora — {{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y') }}</h6>

      @foreach($venta->detalles as $detalle)
        <div class="d-flex align-items-start border-bottom pb-3 mb-3">
          <div class="me-3">
            <img src="{{ asset('img/producto.png') }}" width="90" class="rounded">
          </div>
          <div class="flex-grow-1">
            <h6 class="fw-bold">{{ $detalle->producto->nombre ?? 'Producto sin nombre' }}</h6>
            <p class="text-muted small">Cantidad: {{ $detalle->cantidad }}</p>

            <form method="POST" action="{{ route('resenas.store') }}">
              @csrf
              <input type="hidden" name="venta_consultora_id" value="{{ $venta->id }}">

              <div class="mb-2">
                <label class="small">¿Qué tal te pareció el producto?</label>
                <select name="puntaje" class="form-select w-auto d-inline-block ms-2" required>
                  <option value="5">⭐⭐⭐⭐⭐</option>
                  <option value="4">⭐⭐⭐⭐</option>
                  <option value="3">⭐⭐⭐</option>
                  <option value="2">⭐⭐</option>
                  <option value="1">⭐</option>
                </select>
              </div>

              <textarea name="reseña" class="form-control mb-2" placeholder="Escribe tu opinión..." rows="2"></textarea>
              <button type="submit" class="btn btn-dark btn-sm">Agregar reseña</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

  @if($ventasClientes->isEmpty() && $ventasConsultoras->isEmpty())
    <div class="alert alert-secondary text-center">Aún no tienes compras registradas.</div>
  @endif
</div>
@endsection
