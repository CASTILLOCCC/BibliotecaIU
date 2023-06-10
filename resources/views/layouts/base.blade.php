<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Autores</title>
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
        <a class="nav-link active" aria-current="page" href="#">Autor</a>
        <a class="nav-link" href="{{url('libros')}}">Libro</a>
        <a class="nav-link" href="#">Usuario</a>
        <a class="nav-link" href="#">Ejemplar</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Préstamo</a>   
  <br>
      </div>
    </div>
  </div>
  
</nav>
<H3>Sistema de Biblioteca</H3> 
<div class="container-fluid"><hr>
@yield('content')
</div>

</body>
</html>