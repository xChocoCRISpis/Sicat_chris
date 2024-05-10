<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

