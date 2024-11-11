<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HojaController;

// Rutas para el controlador HojaController
Route::get('/hoja', [HojaController::class, 'index']);  // Página principal de la hoja de vida

// Ruta para el formulario de creación (con nombre)
Route::get('/hoja/create', [HojaController::class, 'create'])->name('hoja.create');  // Formulario para crear

// Ruta para guardar datos
Route::post('/hoja', [HojaController::class, 'store']);  // Guardar datos

// Ruta principal de la aplicación
Route::get('/', function () {
    return view('welcome'); // Página de inicio
});
