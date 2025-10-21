

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('home');
});

// Página de la tienda consultora
Route::get('/tienda-consultora', [ProductoController::class, 'mostrarTienda'])->name('tienda.consultora');

// CRUD de categorías
Route::resource('categorias', CategoriaController::class);

// CRUD de productos
Route::resource('productos', ProductoController::class);
