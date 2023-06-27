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
  <th colspan="12"> 
 <a class="btn btn-primary" href="/Ejemplares/create">Agregar Ejemplar</a>
    </th>

</tr>

<tr>
    <th>Código</th>
     <th>Localizaciòn</th>
      <th>Cantidad</th>
       <th>Título Libro</th>
        <th></th>
        
</tr>
    </thead>

<tbody>
@foreach ($ejemplar as $ejemplar )
<tr>
<td>{{ $ejemplar->id }}</td>
<td>{{ $ejemplar->localizacion }}</td>
<td>{{ $ejemplar->cantidad }}</td>
<td>{{ $ejemplar->libro_titulo}}</td>
<td><a class="btn btn-primary" href="/Ejemplares/{{$ejemplar->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Ejemplares/{{$ejemplar->id}}/confirmDelete"><small>Eliminar</small></a></td>
</tr>

@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection