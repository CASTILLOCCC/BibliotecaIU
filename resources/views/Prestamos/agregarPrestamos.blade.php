@extends('layouts.base')
@section('content')

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Lista de Préstamo Personal</title>
</head>
<body>
    <form id = "formPrestamo" ="{{ route('consultarPrestamos') }}" method="POST">
        @csrf
  <div class="container col-12">
    <div id="dropdown" >
        <h5>Buscar Prestamos por Usuario</h5>
        <select name="persona" class="form-control" onchange="this.form.submit()">
            <option value="">Selecciona un usuario</option>
            @foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}" @if($usuario->id == $superPantalla['ValorUsuario']) selected @endif>{{ $usuario->nombreUsuario }}</option>
            @endforeach
        </select>
        <br>
    </div>
    </form>
    <div id="grillaPrestamo">
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
            <a onclick="submitFormDevolver(event, {{ $item->id }})" class="btn btn-warning"><small>Devolver</small></a>
          </td>
       
      @endforeach
      @endif
  
  </tbody>
  </table>
</div>
<br>
<br>
<div id="dropdown" >
  <h5>Buscar Libro por Autor</h5>
  <select name="autores" class="form-control" onchange="this.form.submit()">
      <option value="">Selecciona autor</option>
      @foreach($superPantalla['ListaAutores'] as $autores)
          <option value="{{ $autores->id }}" @if($autores->id == $superPantalla['ValorAutor']) selected @endif>{{ $autores->nombreAutor }}</option>
   
      @endforeach
  </select>
  <br>
</div>
<div id="grillaPrestamo">
<table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
  <thead>
      <tr>
          <td>
              <b>Título</b> 
          </td>
          <td>
              <b>Autor</b> 
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
  @if(count($superPantalla['ListaLibros']) > 0)
  @foreach ($superPantalla['ListaLibros'] as $item)
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
        <a class="btn btn-success" onclick="submitFormPrestar(event, {{ $item->id }})"><small>Prestar</small></a>
    </td>
   
  @endforeach
@endif
</tbody>
</table>
</div>
<input name = "idDevolver" type="hidden" />
<input name = "idPrestar" type="hidden"/>
<input name = "idAccion" type="hidden"/>
</form>
<script>
    function submitFormDevolver(event, idDevolver){
        var form = document.getElementById('formPrestamo');
        document.querySelector('[name="idDevolver"]').value=idDevolver;
        document.querySelector('[name="idAccion"]').value="Devolver";
        form.submit();
     
    }
    function submitFormPrestar(event, idPrestar){
        var form = document.getElementById('formPrestamo');
        document.querySelector('[name="idPrestar"]').value=idPrestar;
        document.querySelector('[name="idAccion"]').value="Prestar";
        form.submit();
    }
</script>
</body>
</html>

@endsection('content')