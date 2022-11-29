<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HistorialController;

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
    return view('iniciolog');
});

Route::get('/contacto', function () {
    return view('contacto_form');
});

Route::get('/perfil', function () {
    return view('/perfil');
});

Route::resource('/paciente',PacienteController::class);

Route::resource('/historial',HistorialController::class);

Route::get('/contacto', function () {
    return view('formularios.contacto_form');
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
