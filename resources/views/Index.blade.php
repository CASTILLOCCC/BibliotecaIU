@extends('layouts.base')
@section('content')
           
            <div id="white" class="col-1">
            </div>
        <div class="row">
        <div class="col-sm-1">
  </div>
            <div id = "white" class="col-5" >

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.iudigital.edu.co/Centro-de-Recursos-para-el-Aprendizaje-y-la-Investigacion-CRAI/PublishingImages/Micrositio/Carousel/25112021_carrusel_crai_1.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.iudigital.edu.co/CRAI/SliderHomeCrai/buscar%20en%20BD.png" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.iudigital.edu.co/Centro-de-Recursos-para-el-Aprendizaje-y-la-Investigacion-CRAI/PublishingImages/Micrositio/Carousel/4.4.png" class="d-block w-100" alt="Imagen 3">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                  </a>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br>

                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Project Gutenberg</h5>
                        <p class="card-text">Biblioteca de más de 60.000 libros electrónicos gratuitos. Elija entre los formatos Epub (Publicación electrónica) o Kindle y descárguelos o léalos en línea.</p>
                        <a href="https://www.gutenberg.org/" class="btn btn-primary">Ver más</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Internet Archive</h5>
                        <p class="card-text">Biblioteca digital que contiene sitios públicos de la web, libros, textos, audios, conciertos en vivo, videos, programas de televisión, imágenes y programas de software.</p>
                        <a href="https://archive.org/" class="btn btn-primary">Ver más</a>
                      </div>
                    </div>
                  </div>
                </div>
                
            </div>
            
            <div id="white" class="col-1">
            </div>
            <br>
            <div id="white" class="col-5">
              <div class="card" style="width: 20rem;">
                <img src="https://www.iudigital.edu.co/CRAI/SliderHomeCrai/nuevos%20libros.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Acerca del CRAI</h5>
                  <p class="card-text">El Centro de Recursos Abiertos para el Aprendizaje y la Investigación de la IU Digital de Antioquia, es un sitio donde puedes acceder a servicios integrales como apoyo al aprendizaje, este módulo permite realizar solicitudes de prestamos de libros de manera efectiva.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Bases de Datos</li>
                  <li class="list-group-item">Cursos de Formación</li>
                  <li class="list-group-item">Talleres</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.iudigital.edu.co/CRAI/Paginas/default.aspx" class="card-link">CRAI</a>
                  <a href="https://www.iudigital.edu.co/CRAI/Paginas/default.aspx" class="card-link">Bases de Datos</a>
                </div>
              </div>
            </div>
        </div>
        
        <div>

        </div>
            <div id="white" class="col-4">
            </div>
            <div id= "white"class="col-1">
            </div>


 @endsection('content')
