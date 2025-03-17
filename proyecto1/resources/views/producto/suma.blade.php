@extends('../layout.nav')

@section('contenido')

<h1>Suma </h1>
<form action="/suma" method="POST">
    @csrf
    <label for="numero1">Número 1</label>
    <input type="number" name="num1" id="numero1">
    <br>
    <label for="numero2">Número 2</label>
    <input type="number" name="num2" id="numero2">
    <br>
    <button type="submit">Sumar</button>

</form>

@if(isset($resul))
<h2>Resultado: {{ $resul }}</h2>
@endif

@endsection