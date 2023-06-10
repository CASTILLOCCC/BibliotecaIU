@extends('layouts.base')
@section('content')


<table class="table table-striped">
    <thead>
<tr>
    <div class="p-6 text-gray-900">
        <main>
          <div class="container py-4">
              <a  href="{{url('libros/create')}}" class="btn btn-primary btn btn-sm">Agregar Libro</a>
          </div>

</tr>

<tr>
    <th>Código</th>
     <th>Título</th>
      <th>Páginas</th>
       <th>ISBN</th>
        <th>Editorial</th>
        <th>Autor</th>
</tr>
    </thead>

<tbody>
@foreach ($libros as $libro )
<tr>
<td>{{ $libro->codigo }}</td>
<td>{{ $libro->titulo }}</td>
<td>{{ $libro->paginas }}</td>
<td>{{ $libro->isbn }}</td>
<td>{{ $libro->editorial }}</td>
<td>{{ $libro->codigoAutor}}</td>
<td> <a class="btn btn-danger" href="/libros/{{ $libro->codigo}}/edit">Editar</a></td>
<td> <a class="btn btn-danger" href="/libros/{{ $libro->codigo}}/confirmDelete">Eliminar</a></td>

</tr>
    
@endforeach
</tbody>
</table>
<br>
<br>
<br>

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