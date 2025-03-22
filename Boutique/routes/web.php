<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearP', [productoControllers::class, 'crearP'])->name('crearP');







Route::post('/guardarP', [productoControllers::class, 'guardarP'])->name('guardarP');

Route::get('/consultaP', [productoControllers::class, 'consultaP'])->name('consultaP');

