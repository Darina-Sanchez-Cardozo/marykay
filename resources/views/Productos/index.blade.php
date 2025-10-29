@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Catálogo de Productos Mary Kay 💄</h2>

    <a href="{{ route('productos.create') }}" class="btn btn-rosado mb-3">➕ Agregar producto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Descripción</th> 
                <th>Precio Mayoreo</th>
                <th>Precio Menudeo</th>
                <th>Existencias</th>
                <th>Estado</th>
                <th>Categoría</th>
                <th>Campaña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->codigo_barras }}</td>
                <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td> 
                <td>${{ number_format($producto->precio_mayoreo, 2) }}</td>
                <td>${{ number_format($producto->precio_menudeo, 2) }}</td>
                <td>{{ $producto->existencias }}</td>
                <td>{{ $producto->estado_producto }}</td>
                <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                <td>{{ $producto->campania->nombre ?? 'Sin campaña' }}</td>
                <td>
                    <a href="{{ route('productos.detalle', $producto->id) }}" class="btn btn-info btn-sm"> Ver detalle</a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $productos->links() }}
</div>
@endsection
