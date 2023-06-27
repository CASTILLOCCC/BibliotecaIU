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
        <a class="btn btn-primary" href="/Usuarios/create">Agregar Usuario</a>
    </th>
    
</tr>

<tr>
    <th>Código</th>
    <th>Nombre Usuario</th> 
    <th>Teléfono</th>
    <th>Dirección</th>
</tr>
    </thead>

<tbody>
@foreach($usuario as $usuario)
<tr>
<td>{{$usuario->id}}</td>
<td>{{$usuario->nombreUsuario}}</td>
<td>{{$usuario->telefonoUsuario}}</td>
<td>{{$usuario->direccionUsuario}}</td>


<td><a class="btn btn-primary" href="/Usuarios/{{$usuario->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Usuarios/{{$usuario->id}}/confirmDelete"><small>Eliminar</small></a>
</td>
</tr>



@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection