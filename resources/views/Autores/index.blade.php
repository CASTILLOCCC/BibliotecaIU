@extends('layouts.base')
@section('content')
  @if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif
<table class="table table-striped">
    <thead>
<tr>
    <th colspan="4"> 
        <a class="btn btn-primary" href="/Autores/create">Agregar Autor</a>
    </th>

  
</tr>

<tr>
    <th>Código</th>
     <th>Nombre Autor</th>
     <th></th>      
</tr>
    </thead>

<tbody>
@foreach($autor as $autor)
<tr>
<td>{{$autor->id}}</td>
<td>{{$autor->nombreAutor}}</td>
<td><a class="btn btn-primary" href="/Autores/{{$autor->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Autores/{{$autor->id}}/confirmDelete"><small>Eliminar</small></a>
</td>
</tr>


@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection