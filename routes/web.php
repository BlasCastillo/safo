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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/persona', function () {
    return view('persona');
});
Route::get('/administrador', function () {
    return view('administrador');
});
Route::get('/mostrarpersona', function () {
    return view('mostrarpersona');
});
Route::get('/registrarpersona', function () {
    return view('registrarpersona');
});
Route::get('/iniciar', function () {
    return view('iniciar');
});
Route::get('/registrar', function () {
    return view('registrar');
});
Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/registrarcursos', function () {
    return view('registrarcursos');
});
Route::get('/examenes', function () {
    return view('examenes');
});
Route::get('/examenes', function () {
    return view('examenes');
});
Route::get('/estadisticas', function () {
    return view('estadisticas');
});
Route::get('/noticias', function () {
    return view('noticias');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
