<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

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
    return view('welcome');
});

Route::resource('/paciente',PacienteController::class);

Route::get('/historial', function () {
    return view('formularios.historial_form');
});

Route::get('/contacto', function () {
    return view('formularios.contacto_form');
});