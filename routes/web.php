<?php

use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\JdeptoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProyectogramaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AlumnoController;
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
    return view('welcome');
});

Route::resource('periodos', PeriodoController::class);
Route::resource('domicilios', DomicilioController::class);
Route::resource('jdeptos', JdeptoController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('proyectogramas', ProyectogramaController::class);
Route::resource('proyectos', ProyectoController::class);
Route::resource('programas', ProgramaController::class);
Route::resource('alumnos', AlumnoController::class);
