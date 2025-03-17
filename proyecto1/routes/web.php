<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\sumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearProducto', function () {
    return view('producto/crearProducto');
});

// Con controlador
Route::get('/suma', [sumaController::class, 'index']);

// Sin controlador
//Route::get('/suma', function () {
//     return view('producto/suma');
// });

// Route::post('/suma', function (Request $request) {
//     $num1 = $request->input('num1');
//     $num2 = $request->input('num2');
//     $resultado = $num1 + $num2;
//     // echo "El resultado de la suma es: " . $resultado;
//     return view('producto/suma', ['resul' => $resultado]);
// });

Route::post('/suma', [sumaController::class, 'suma']);
