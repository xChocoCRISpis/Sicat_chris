<?php

use App\Http\Controllers\ActividadesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/alumnos', function () {
    return view('alumnos');
})->name('alumnos');
Route::get('/alumnos_altas', function () {
    return view('alumnos_altas');
})->name('alumnos_alta');
Route::get('/alumnos_edit', function () {
    return view('alumnos_edit');
})->name('alumnos_edit');



Route::post('/agregar-alumno', [AlumnosController::class, 'AgregarAlumno'])->name('AgregarAlumnos');
Route::get('/ver-carreras', [AlumnosController::class, 'VerCarreras'])->name('VerCarreras');
Route::get('/ver-alumnos', [AlumnosController::class, 'VerAlumnos'])->name('VerAlumnos');

Route::get('/actividades-dep', function () {
    return view('actividades_dep');
})->name('actividades_dep');

Route::get('/getActDep',[ActividadesController::class, 'getActDep'])->name("VerActividadesDeportivas");



Route::get('/actividades-cul', function () {
    return view('actividades_cul');
})->name('actividades_cul');

Route::get('/getActCul',[ActividadesController::class, 'getActCul'])->name("VerActividadesCulturales");

// Rutas para el manejo de un alumno específico
Route::get('/alumnos/{id_alumno}', [AlumnosController::class, 'GetAlumno']);
Route::patch('/alumnos/{id_alumno}', [AlumnosController::class, 'ActualizarAlumno'])->name('ActualizarAlumno');
Route::delete('/alumnos/{id_alumno}', [AlumnosController::class, 'EliminarAlumno'])->name('EliminarAlumno');
