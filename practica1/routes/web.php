<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('principal');
});
//ruta para vista de alumnos
Route::view('/alumnos','alumnos');

//ruta para vista de curriculum
Route::view('/curriculum','curriculum');

//ruta para vista de registro de usuarios
Route::get('/crear', [RegisterController::class,'index'])->name('register');

//ruta para enviar datos al servidor
Route::post('/crear', [RegisterController::class,'store']);

//ruta para mostrar el dashboard deñ usuario autenticado
Route::get('/muro', [PostController::class,'index'])->name('post-index');

//ruta para login
Route::get('/login', [LoginController::class,'index'])->name('login');

//ruta para validacion de login
Route::post('/login', [LoginController::class,'store']);


//ruta para logout
//Route::get('/login', [LogoutController::class,'index'])

//ruta para validacion de logout
Route::post('/logout', [LogoutController::class,'store'])->name('logout');
