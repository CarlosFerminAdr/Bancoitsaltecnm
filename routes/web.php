<?php

use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\JdeptoController;
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
