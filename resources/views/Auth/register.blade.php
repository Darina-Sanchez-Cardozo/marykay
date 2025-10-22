@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
  <div class="card shadow-lg p-4" style="max-width:800px; border-radius:20px;">
    <h3 class="fw-bold text-center mb-4">Añadir nuevo usuario 💋</h3>

    <form method="POST" action="{{ route('register.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <!-- Datos personales -->
        <div class="col-md-8">
          <h5 class="fw-bold mb-3">Detalles del usuario</h5>

         <div class="row mb-3">
          <div class="col-md-4">
            <label class="form-label">Nombre *</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>

          <div class="col-md-4">
            <label class="form-label">Apellido Paterno *</label>
            <input type="text" name="apellido_paterno" class="form-control" required>
          </div>

          <div class="col-md-4">
            <label class="form-label">Apellido Materno *</label>
            <input type="text" name="apellido_materno" class="form-control" required>
          </div>
        </div>


          <div class="mb-3">
            <label class="form-label">Correo electrónico *</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Fecha de Nacimiento *</label>
              <input type="date" name="fecha_nacimiento" class="form-control" required>
            </div>
            <div class="col">
              <label class="form-label">Teléfono *</label>
              <input type="text" name="telefono" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Dirección *</label>
            <input type="text" name="direccion" class="form-control" required>
          </div>

          <div class="mb-3">
              <label class="form-label">Contraseña *</label>
              <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Confirmar contraseña *</label>
              <input type="password" name="password_confirmation" class="form-control" required>
          </div>


          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" checked>
            <label class="form-check-label">Enviar confirmación por correo electrónico</label>
          </div>
        </div>

        <!-- Imagen y rol -->
        <div class="col-md-4 text-center">
          <h6 class="fw-bold mb-3">Imagen de perfil</h6>
          <img src="{{ asset('img/default-avatar.png') }}" class="img-fluid mb-3 rounded-circle" style="width:120px;">
          <input type="file" name="imagen" class="form-control mb-3">

          <div class="mb-3">
            <label class="form-label">¿Quién soy?</label>
            <select name="rol" class="form-select" required>
              <option value="">Seleccione*</option>
              <option value="consultora">Consultora</option>
              <option value="cliente">Cliente</option>
              <option value="almacenista">Almacenista</option>
            </select>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-dark me-2">Añadir usuario</button>
        <a href="{{ route('login') }}" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection
