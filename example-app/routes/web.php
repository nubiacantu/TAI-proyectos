<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//regresa una vista cuando esta en raiz, en lugar de / puede ir un controlador
//ruta para vista de pagina principal
Route::get('/', function () {
    return view('principal');
});
//ruta para vista de alumnos
Route::view('/alumnos','alumnos');

//ruta para vista de alumnos
Route::view('/curriculum','curriculum');

Route::view('/contenido','contenido');