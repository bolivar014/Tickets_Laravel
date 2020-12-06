<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta Default
Route::get('/', function () {
    return view('test');
});

// Ruta de prueba
Route::get('/prueba', function() {
    return view('pruebas.prueba');
});


// Gestión
    // Tickets
    // Asignación

// Configuración
    // Tipo 
    // Prioridades

// Reportes
    // Creados
    // Pendientes

// Administración
    // Usuarios
    // Roles
    // Permisos
