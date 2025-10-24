@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
  <div class="card shadow-lg p-4" style="width:500px; border-radius:15px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-bold">Añadir Campaña 💼</h4>
      <span class="text-muted small">Administrador</span>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('campanias.store') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">Nombre de la campaña *</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ej. Primavera 2025" required>
      </div>

      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Fecha de inicio *</label>
          <input type="date" name="fecha_inicio" class="form-control" required>
        </div>
        <div class="col">
          <label class="form-label">Fecha de fin *</label>
          <input type="date" name="fecha_fin" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Estado *</label>
        <select name="estado" class="form-select" required>
          <option value="">Seleccione</option>
          <option value="Activa">Activa</option>
          <option value="Cerrada">Cerrada</option>
        </select>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-dark me-2">--Agregar--</button>
        <a href="{{ route('login') }}" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection
