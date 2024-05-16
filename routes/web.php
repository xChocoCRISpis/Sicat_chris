<?php

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
Route::get('/alumnos', function () {
    return view('alumnos');
})->name('alumnos');

Route::post('/agregar-alumno', [AlumnosController::class, 'AgregarAlumno'])->name('AgregarAlumnos');
Route::get('/ver-carreras', [AlumnosController::class, 'VerCarreras'])->name('VerCarreras');
