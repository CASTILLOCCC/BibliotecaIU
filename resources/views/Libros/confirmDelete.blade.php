@extends('layouts.base')
@section ('content')
¿Desea eliminar el libro: {{$libro->titulo}}?
<br>
<br>
<form action="/Libros/{{$libro->id}}" method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Libros">Regresar</a>

</form>

@endsection