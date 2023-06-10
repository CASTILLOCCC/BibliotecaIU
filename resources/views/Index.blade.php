<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

@extends('layouts.base')
@section('content')
       

            
            <div id="white" class="col-1">
            </div>
        <div class="row">
        <div class="col-sm-1">
  </div>
            <div id = "white" class="col-5" >
                <br>

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

            </div>
            
            <div id="white" class="col-1">
            </div>
            <div id="white" class="col-4">
                Romero (2003) señala que:

                «Las bibliotecas universitarias son complejas instituciones con una gran variedad de roles que ofrecen productos y servicios desarrollados a lo largo de la historia y cuyo fin fundamental ha permanecido siendo el mismo: ofrecer acceso al conocimiento científico y de calidad. Ninguna otra institución habría podido arrebatarle su primacía como líder en el suministro de información científica e histórica, hasta el punto de ser consideradas iconos culturales por su papel de guardianes del conocimiento científico (…)
                
                Sin embargo, hoy día somos testigos de que su papel de instituciones líderes en el suministro de la información está cambiando y las bibliotecas están renunciando a ese puesto debido básicamente al impacto de la tecnología digital, que ha inundado cada aspecto de nuestra civilización y ha supuesto una revolución no solo en la forma en que almacenamos y transmitimos la información sino también en cómo la buscamos o accedemos a ella (p. 1).»
            </div>
            <div id= "white"class="col-1">
            </div>
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
