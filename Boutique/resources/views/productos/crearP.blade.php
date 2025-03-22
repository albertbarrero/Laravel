    <title>Crear Producto</title>

    @extends('layout.nav') <!--llama al archivo layout.nav.php-->
    @section('content') <!-- seccion de contenido despues del navegador-->
    <div class="container">
        <h1>Crear Producto</h1>
        <form action="/guardarP" method="POST" class="" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data" es para poder subir archivos -->
            @csrf
            
            <label for="nombreProducto">Nombre</label>
            <input type="text" name="nombreProducto" id="nombreProducto" class="form-control">
            
            <label for="fotoProducto">Foto</label>
            <input type="file" name="fotoProducto" id="fotoProducto" class="form-control">
            
            <label for="idTipoProducto" class="">Tipo Producto</label>
            <select name="idTipoProducto" id="idTipoProducto" class="form-control">
                <option value="Seleccione">
                    Seleccione...
                </option>
                @foreach($tipoProductos as $tipo) <!--$tipoProductos viene de productoControllers
                $tipoProductos = tipoProductoModels::all(); -->
                <option value="{{$tipo->idTipoProducto}}">
                    {{$tipo->nombreTipoProducto}}
                </option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        <!-- Mensaje de confirmacion -->
        @if(session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
    </div>
    @endsection <!-- fin de la seccion de contenido -->
