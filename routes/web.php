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

/*
    // Ruta Default
    Route::get('/', function () {
        return view('home');
    });
*/
Route::get('/', 'HomeController')->name('home');

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
        // Index
        // Route::get('administracion/usuarios', 'Admin\UsersController@index')->name('admin.user.index');

        // Show
        // Route::get('administracion/usuarios/{userId}', 'Admin\UsersController@show')->name('admin.user.show');
    
        /*
        // 
        Route::group(['prefix' => 'administracion', 'namespace' => 'Admin'], function(){
            Route::resource('users', 'UsersController');
        });
        */

        // 
        Route::prefix('administracion')->namespace('Admin')->name('admin.')->group(function(){
            Route::resource('usuarios', 'UsersController')->names('user')->parameters(['usuarios' => 'user']);
        });
        
    // Roles
    // Permisos
