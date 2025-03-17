@extends('layout.nav')
@section('content') <!-- seccion de contenido despues del navegador-->

<table class="table text-center align-middle">
    <thead>
        <tr>
            <th scope="col">idProducto</th>
            <th scope="col">nombreProducto</th>
            <th scope="col">fotoProducto</th>
            <th scope="col">tipoProducto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($productos as $producto)
                <td>{{$producto->idProducto}}</td>
                <td>{{$producto->nombreProducto}}</td>
                <td>
                <img src="{{ asset('storage/productos/' . $producto->fotoProducto) }}" width="50" alt="">
                </td>
                <td>{{$producto->tipoProducto->nombreTipoProducto}}</td><!-- tipoProducto es el nombre de la tabla y nombreTipoProducto es el nombre de la columna -->
            </tr>
            @endforeach
       
    </tbody>
</table>

@endsection <!-- fin de la seccion de contenido -->