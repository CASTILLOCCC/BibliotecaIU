@extends('layouts.base')
@section ('content')

<form action="/libros" method= "POST">

    <div class="container mt-4">
        <h2>Crear Libro</h2>
    
        <form>
          <div class="form-group col-6">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
          </div>
          <div class="form-group col-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          <div class="form-group col-6">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn">
          </div>
          <div class="form-group col-6">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
          </div>
          <div class="form-group col-6">
            <label for="paginas">Páginas:</label>
            <input type="number" class="form-control" id="paginas" name="paginas">
          </div>
          <div class="form-group col-6">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor">
          </div>
          
          <br>
<a class="btn btn-primary" href="/libros">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


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







