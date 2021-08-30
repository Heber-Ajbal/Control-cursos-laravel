<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\CursoController;
use App\Models\Asignacion;
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
})->name('home');

Route::resource('cursos', CursoController::class);

Route::resource('alumnos', AlumnoController::class);

Route::resource('asignaciones', AsignacionController::class);

Route::resource('actividades', ActividadController::class);
