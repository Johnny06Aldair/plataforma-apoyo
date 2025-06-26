<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\ActualizacionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('proyectos', ProyectoController::class);
    Route::resource('donaciones', DonacionController::class);
    Route::resource('actualizaciones', ActualizacionController::class);
});
