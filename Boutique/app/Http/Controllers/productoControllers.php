<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productoModels;
use App\Models\tipoProductoModels;

class productoControllers extends Controller
{
    public function crearP()
    {
        $tipoProductos = tipoProductoModels::all(); //Para rellenar el select
        return view('productos.crearP', compact('tipoProductos'));
    }

    public function guardarP(Request $request)
    {
        $request->validate([
            'nombreProducto' => 'required',
            'fotoProducto' => 'required',
            'idTipoProducto' => 'required',
        ]);

        $producto = new productoModels();

        if ($request->hasFile('fotoProducto')) {
            $imagen = $request->file('fotoProducto'); // Obtiene el archivo correctamente

            $nombreImagen = $imagen->getClientOriginalName(); //nombre original de la imagen

            $rutaImagen = $imagen->storeAs('productos', $nombreImagen, 'public');
        }

        $producto->nombreProducto = $request->nombreProducto;
        $producto->fotoProducto = $nombreImagen;
        $producto->idTipoProducto = $request->idTipoProducto;
        $producto->save();

        return redirect()->route('crearP')->with('mensaje', 'Producto guardado');
    }

    public function consultaP()
    {
        //$productos = productoModels::all();//Sin relaciones
        $productos = productoModels::with('tipoProducto')->get();//Con relaciones
        return view('productos.consultaP', compact('productos'));
    }
}
