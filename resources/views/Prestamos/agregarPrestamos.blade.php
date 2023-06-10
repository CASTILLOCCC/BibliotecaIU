@extends('layouts.base')
@section('content')

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


<footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div style="">
    <div class="container p-4 pb-0" >
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #3b5998;"
          href="https://www.facebook.com/soyiudigital"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #55acee;"
          href="https://twitter.com/IUDIGITAL"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #dd4b39;"
          href="https://www.linkedin.com/company/unavailable/"
          role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #ac2bac;"
          href="https://www.instagram.com/iudigital/"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
      </section>
      <!-- Section: Social media -->
    </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://www.iudigital.edu.co/Paginas/default.aspx">IUDigital de Antioquia</a>
    </div>
    <!-- Copyright -->
  </footer>


@endsection('content')