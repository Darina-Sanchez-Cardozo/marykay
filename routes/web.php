

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\AuthController;

Route::get('/home', function () {
    return view('home');
});

// Página de la tienda consultora
Route::get('/tienda-consultora', [ProductoController::class, 'mostrarTienda'])->name('tienda.consultora');

// CRUD de categorías
Route::resource('categorias', CategoriaController::class);//tienda-categrias

// CRUD de productos
Route::resource('productos', ProductoController::class);


Route::get('/tienda-categorias', [TiendaController::class, 'index'])->name('tienda.categorias');



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