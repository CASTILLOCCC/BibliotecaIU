<!DOCTYPE html>

<html>
<head>
  <title>Lista de Préstamo Personal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form action="{{ route('consumoUno') }}" method="POST">
        @csrf
    <div id="dropdown">
        <h3>Buscar Usuario</h3>
        <select name="persona" class="form-control">
            <option value="">Selecciona un usuario</option>
            @foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombreUsuario }}</option>
            @endforeach
        </select>
        <input type="submit" value="Buscar por persona">
    </div>
    </form>
<br>
    <div id="grillaPrestamo">
    <h1>Lista de Préstamo Personal</h1>
    <table class="table table-striped" style="width: 80%; margin: 0px auto; text-align: center">
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

      rggr 
          </td>
       
      @endforeach
  
  </tbody>
  </table>
</div>
@foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombreUsuario }}</option>
            @endforeach
  </div>
</body>
</html>