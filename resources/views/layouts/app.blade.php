<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mary Kay Digital 💄')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI'; background-color: #fff; }
        .navbar-brand { color: #c71585 !important; font-weight: bold; }
        .btn-rosado { background-color: #c71585; color: white; }
        .btn-rosado:hover { background-color: #a0136b; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="{{ url('/') }}">Mary Kay Digital</a>
        <div class="ms-auto">
            <a href="{{ route('productos.index') }}" class="btn btn-outline-dark me-2">Productos</a>
            <a href="{{ route('tienda.consultora') }}" class="btn btn-rosado me-2">Tienda Consultora</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<footer class="text-center py-3 border-top text-muted">
    © 2025 Mary Kay Digital — Sistema de Venta de Maquillaje
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
