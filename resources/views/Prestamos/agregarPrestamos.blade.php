@extends('layouts.base')
@section('content')

<!DOCTYPE html>

<html>
<head>
  <title>Lista de Préstamo Personal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container col-8">
    <form action="{{ route('consultarPrestamos') }}" method="POST">
        @csrf
    <div id="dropdown" >
        <h4>Buscar Usuario</h4>
        <select name="persona" class="form-control" onchange="this.form.submit()">
            <option value="">Selecciona un usuario</option>
            @foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombreUsuario }}</option>
            @endforeach
        </select>
        <br>
    </div>
    </form>
<br>
    <div id="grillaPrestamo">
    <h4>Lista de Préstamo Personal</h4>
    <table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
      <thead>
          <tr>
              <td>
                  <b>Libro</b> 
              </td>
              <td>
                  <b>Autor</b> 
              </td>
              <td>
                  <b>Cantidad</b> 
              </td>
              <td>
                  <b>Editorial</b> 
              </td>
              <td>
                  <b>Fecha Prestamo</b> 
              </td> 
              <td>
                  <b>Accion</b> 
              </td> 
          </tr>
      </thead>
  <tbody>
    @if(count($superPantalla['ListaPrestamoPersonal']) > 0)
      @foreach ($superPantalla['ListaPrestamoPersonal'] as $item)
      <tr>
          <td>
              {{ $item->titulo }}
          </td>
          <td>
              {{ $item->nombreAutor }}
          </td>
          <td>
              {{ $item->cantidad }}
          </td>
          <td>
            {{ $item->editorial}}
        </td>
          <td>
              {{ $item->fechaPrestamo}}
          </td>
          
          <td>

            
          </td>
       
      @endforeach
      @endif
  
  </tbody>
  </table>
</div>
<div id="dropdown" >
  <h4>Buscar Libro</h4>
  <select name="libro" class="form-control">
      <option value="">Selecciona autor</option>
      @foreach($superPantalla['ListaAutores'] as $autores)
          <option value="{{ $autores->id }}">{{ $autores->nombreAutor }}</option>
      @endforeach
  </select>
  <br>
  <input class="btn btn-primary" type="submit" value="Buscar por persona">
</div>

<br>
<div id="grillaPrestamo">
<h4>Lista de Préstamo Autores</h4>
<table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
  <thead>
      <tr>
          <td>
              <b>Codigo Autor</b> 
          </td>
          <td>
              <b>Nombre Autor</b> 
          </td>
          <td>
              <b>Cantidad</b> 
          </td>
          <td>
              <b>Accion</b> 
          </td> 
      </tr>
  </thead>
<tbody>
  {{-- @if(count($superPantalla['ListaAutores']) > 0)
  @foreach ($superPantalla['ListaAutores'] as $librosStoc)
  <tr>
      <td>
          {{ $item->titulo }}
      </td>
      <td>
          {{ $item->nombreAutor }}
      </td>
      <td>
          {{ $item->cantidad }}
      </td>
      <td>
        {{ $item->editorial}}
    </td>
      <td>
          {{ $item->fechaPrestamo}}
      </td>
      
      <td>

        
      </td>
   
  @endforeach
@endif --}}
</tbody>
</table>
</div>
</body>
</html>




@endsection('content')