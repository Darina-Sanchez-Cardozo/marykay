@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card shadow-lg p-4" style="width:420px; border-radius:20px;">
        <h3 class="text-center fw-bold mb-3">Iniciar Sesión Mary Kay 💄</h3>
        <p class="text-center text-muted mb-4">Ingrese su correo electrónico y contraseña.</p>

        @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <a href="#" class="text-decoration-none">¿Olvidó su contraseña?</a>
            </div>

            <button type="submit" class="btn btn-dark w-100 mb-3">Iniciar sesión</button>

            <p class="text-center">¿No tiene una cuenta? 
                <a href="{{ route('register') }}" class="fw-bold">Registrarse</a>
            </p>
        </form>
    </div>
</div>
@endsection
