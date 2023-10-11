<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\instructoresController;
use App\Http\Controllers\CursoController;
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
    return view('welcome');
});

/*
    GET /alumnos (index): Para mostrar una lista de alumnos.
    GET /alumnos/create (create): Para mostrar el formulario de creación de un alumno.
    POST /alumnos (store): Para guardar un nuevo alumno en la base de datos.
    GET /alumnos/{alumno} (show): Para mostrar los detalles de un alumno en particular.
    GET /alumnos/{alumno}/edit (edit): Para mostrar el formulario de edición de un alumno.
    PUT/PATCH /alumnos/{alumno} (update): Para actualizar un alumno existente.
    DELETE /alumnos/{alumno} (destroy): Para eliminar un alumno existente.

    Route::resource('alumnos', AlumnoController::class);
*/

/*
Route::get('alumnos', function () {
    return app()->make('App\Http\Controllers\AlumnoController')->index();
})->name("alumnos.index");
*/
Route::get('menu', [MenuController::class, 'showMenu']);
/*alumno*/
Route::get('alumnos', [AlumnoController::class, 'index'])->name("alumnos.index");
Route::get('alumnos/create', [AlumnoController::class, 'create'])->name("alumnos.create");
Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('alumnos/{idAlumno}', [AlumnoController::class, 'show'])->name("alumnos.show");
Route::get('alumnos/{idAlumno}/edit', [AlumnoController::class, 'edit'])->name("alumnos.edit");
Route::put('alumnos/{idAlumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('alumnos/{idAlumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
/*istructor c_c*/

Route::get('instructores', [instructoresController::class, 'index'])->name("instructores.index");
Route::get('instructores/create', [instructoresController::class, 'create'])->name("instructores.create");
Route::post('instructores', [instructoresController::class, 'store'])->name('instructores.store');
Route::get('instructores/{idinstructor}', [instructoresController::class, 'show'])->name("instructores.show");
Route::get('instructores/{idinstructor}/edit', [instructoresController::class, 'edit'])->name("instructores.edit");
Route::put('instructores/{idinstructor}', [instructoresController::class, 'update'])->name('instructores.update');
Route::delete('instructores/{idinstructor}', [instructoresController::class, 'destroy'])->name('instructores.destroy');

/*curso +o+*/

Route::get('cursos', [CursoController::class, 'index'])->name("cursos.index");
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{idcurso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{idcurso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{idcurso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{idcurso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
/*salida:)siii*/
Route::get('/', function () {return view('welcome');})->name('inicio');
