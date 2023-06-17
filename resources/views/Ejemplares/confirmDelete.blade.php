@extends('layouts.base')
@section ('content')
¿Desea eliminar el Ejemplar: {{$ejemplar->localizacion}}?
<br>
<br>
<form action="/Ejemplares/{{$ejemplar->id}}" method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Ejemplares">Regresar</a>

</form>

@endsection