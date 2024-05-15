<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

//Ruta a el controlador de Login
Route::post('/login', [LoginController::class, 'login'])->name('login');
//Ruta a la vista de inicio
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
//Ruta a la vista de alumnos
Route::get('/alumnos', function () {
    return view('alumnos');
})->name('alumnos');