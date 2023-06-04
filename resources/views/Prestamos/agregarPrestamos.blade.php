<!DOCTYPE html>
<html>
<head>
  <title>Lista de Préstamo Personal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
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
</body>
</html>