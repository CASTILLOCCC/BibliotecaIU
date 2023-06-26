<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title><CRAI IUD (Centro de Recursos para el Aprendizaje y la Investigacion)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
      <div class="container-fluid">
        <img
        src="https://www.iudigital.edu.co/Style%20Library/images/logo-escudo.png"
        height="60"
        alt="MDB Logo"
        loading="lazy"
      />
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('index')}}">Inicio</a>
        <a class="nav-link active" aria-current="page" href="{{url('Autores')}}">Autor</a>
        <a class="nav-link" href="{{url('libros')}}">Libro</a>
        <a class="nav-link" href="{{url('usuarios')}}">Usuario</a>
        <a class="nav-link" href="{{url('ejemplares')}}">Ejemplar</a>
        <a class="nav-link" href="{{url('prestamos')}}" tabindex="-1" aria-disabled="true">Préstamo</a>   
  <br>
      </div>
    </div>
  </div>
  
</nav>
  <center><H2>CRAI IUD</H2><h5>Centro de Recursos para el Aprendizaje y la Investigación</h5></center> 
<div class="container-fluid"><hr>
  @if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif
@yield('content')
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


</div>

</body>
</html>