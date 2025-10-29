<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaniaController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProductoDetalleController;

Route::get('/', function () {
    return view('home');
});

///detalles del producto-compra
Route::get('/productos/detalle/{id}', [ProductoDetalleController::class, 'show'])
    ->name('productos.detalle');
    
///entrada al almacen de productos, registro
Route::resource('entradas', EntradaController::class);

// Página de la tienda consultora
Route::get('/tienda-consultora', [ProductoController::class, 'mostrarTienda'])->name('tienda.consultora');

// CRUD de categorías
Route::resource('categorias', CategoriaController::class);//tienda-categrias

// CRUD de productos
Route::resource('productos', ProductoController::class);

// CRUD de tienda categorias
Route::get('/tienda-categorias', [TiendaController::class, 'index'])->name('tienda.categorias');

// Página Mis Compras
Route::get('/mis-compras', [ResenaController::class, 'index'])->name('compras.index');

// Guardar reseña
Route::post('/mis-compras/resena', [ResenaController::class, 'store'])->name('resenas.store');

////vistas de campañas
Route::resource('campanias', App\Http\Controllers\CampaniaController::class);

////inicio de sesion

// Mostrar formulario de login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Procesar formulario de login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Mostrar formulario de registro
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// Procesar formulario de registro
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Página de inicio (solo después de iniciar sesión)
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
////fin inicio sesion

//registro de usuarios

        // Página de registro
Route::get('/registro', [AuthController::class, 'showRegister'])->name('register');

        // Procesar registro
Route::post('/registro', [AuthController::class, 'register'])->name('register.post');
///fin registro

////registro campaña

Route::get('/campanias/agregar', [CampaniaController::class, 'create'])->name('campanias.create');
Route::post('/campanias/agregar', [CampaniaController::class, 'store'])->name('campanias.store');
