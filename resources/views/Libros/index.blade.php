@extends('layouts.base')
@section('content')

<table class="table table-striped">
    <thead>
<tr>
  <th colspan="12"> 
 <a class="btn btn-primary" href="/Libros/create">Agregar Libro</a>
    </th>

</tr>

<tr>
    <th>Código</th>
     <th>Título</th>
      <th>ISBN</th>
       <th>Editorial</th>
        <th>Páginas</th>
        <th>Autor</th>
        <th></th>
        
</tr>
    </thead>

<tbody>
@foreach ($libro as $libro )
<tr>
<td>{{ $libro->id }}</td>
<td>{{ $libro->titulo }}</td>
<td>{{ $libro->isbn }}</td>
<td>{{ $libro->Editorial }}</td>
<td>{{ $libro->paginas }}</td>
<td>{{ $libro->autor_nombre}}</td>
<td><a class="btn btn-primary" href="/Libros/{{$libro->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Libros/{{$libro->id}}/confirmDelete"><small>Eliminar</small></a></td>
</tr>

@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection