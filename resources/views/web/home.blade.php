@extends('layouts.app')

@section('content')
    <!--Sliders -->
<section class="p-t-10">
  <div class="carousel-inner wrap-slick1">
    <div class="slick1">
      <div class="zoomInDown item contenido item-slick1" style="background-image: url(image/fondo.jpg);">
        <div class="wrap-content-slide1 flex-col-c-m p-l-15 p-r-15 p-t-10 p-b-10">
          <h1 class="caption1-slide1  t-center animated visible-false m-b-15 mt-4" data-appear="fadeInDown">
            Bienvenido a: <strong class="text-md-left col-sm-100"> VITIS</strong>
          </h1>
          <h5 class="caption2-slide1 t-center animated visible-false m-b-180" data-appear="fadeInUp">
              “Hermosa tierra de los AYLLUS”
          </h5>          
            <!-- Button -->            
            <div class="wrap-btn-slide1 justify-content-center text-center animated visible-false pb-0 ">
              <a href="#" class="text-white">
                <button type="button" class="boton btn-outline-slider">
                  <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                </button>
              </a>
              <a href="#" class="text-white">
                <button type="button" class="boton btn-outline-slider">
                  <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                </button>
              </a>
            
              <a href="#" class="text-white">
                <button type="button" class="boton btn-outline-slider">
                  <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
                </button>
              </a>
            
              <a href="#" class="text-white">
                <button type="button" class="boton btn-outline-slider">
                  <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                </button>
              </a>
              </div>
        </div>
      </div>

      <div class="item contenido item-slick1 item2-slick1" style="background-image: url(images/galeria/parallax1.jpg);">
        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

          <h2 class="caption1-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
            Hermosos lugares
          </h2>
          <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
            Turisticos
          </span>

          <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
            <!-- Button -->
            <a href="#" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
              Saber más...
            </a>
          </div>
        </div>
      </div>

      <div class="item contenido item-slick1 item3-slick1" style="background-image: url(images/galeria/parallax2.jpg);">
        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
          <h2 class="caption1-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
            Deliciosos platos
          </h2>
          <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
            típicos
          </span>


          <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
            <!-- Button -->
            <a href="#" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
              Saber más...
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
    <!--Fin Sliders -->
  
<!-- Nav Celeste-->
<ul class="nav justify-content-center bg9 ">
  <li class="nav-item subnav">
    <a class="nav-link text-white" href="#!">
      <i class="fa fa-users " aria-hidden="true"></i> &#32;  7,765 habitantes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#!">
      <i class="fa fa-map-o" aria-hidden="true"></i>&#32;37,89 Km2 de superficies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#!">
      <i class="fa fa-area-chart" aria-hidden="true"></i>&#32;850 mts. s.n.m</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#!">
      <i class="fa fa-thermometer-full" aria-hidden="true">&#32;</i>&#32;20º temperatura media</a>
  </li>
</ul>
<!-- /Nav Celeste-->
  
<section class="shipping bgwhite p-t-0 p-b-0">
  <div class="flex-w p-l-15 p-r-15">
    <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
      <h4 class="m-text12 t-center">
        Free Delivery Worldwide
      </h4>

      <a href="#" class="s-text11 t-center">
        Click here for more info
      </a>
    </div>

    <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
      <span class="m-text22 t-center">
        Conoce las maravillas de
      </span>
      <h4 class="m-text64 t-center">
        VITIS
      </h4>

      <span class="s-text11 t-center">
        <a href="#" </a>
          <button type="button" class="flex-c-m size2 hov1 trans-0-4 btn btn-verde">Aquí</button>
        </a>

      </span>
    </div>

    <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
      <h4 class="m-text12 t-center">
        Store Opening
      </h4>

      <span class="s-text11 t-center">
        flora y fauna
      </span>
    </div>
  </div>
</section>

<!-- Fin Bloque de imagenes -->
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen1.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">        
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">HOSPEDAJE </h3>  
            <h5 class="h5-responsive">para darse un relax</h5>
            <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>            
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 p-0">  
      <div class="view overlay">
        <img src="images/galeria/imagen2.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">  
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">COMIDA</h3>
            <h5 class="h5-responsive">la mejor gastronomía del lugar</h5>
            <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>  
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen3.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">COMPRAS</h3>
            <h5 class="h5-responsive">que llevar a casa</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen4.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">GALERÍA Y VIDEOS</h3>
            <h5 class="h5-responsive">recuerdos en los mejores lugares</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen5.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">SITIOS DE INTERÉS</h3>
            <h5 class="h5-responsive">donde ir</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen6.png" class="img-fluid " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">COSTUMBRES</h3>
            <h5 class="h5-responsive">Fiestas y Tradiciones</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

  </div>
</div>  
  
<!-- Fin Bloque de imagenes -->

<!-- #VITIS una experiencia inolvidable -->
</br>
<!-- /#VITIS una experiencia inolvidable -->


<!-- Parallax 1 -->
<section class="parallax0 parallax100" style="background-image: url(images/galeria/parallax1.jpg);">
  <div class="overlay0 p-t-190 p-b-200">
    <div class="flex-col-c-m p-l-15 p-r-15">
      <h3 class="l-text1 fs-35-sm">
        ¡ VISITA VITIS !
      </h3>
    </div>
  </div>
</section>
<!-- /Parallax 1 -->

<!-- #VITIS una experiencia inolvidable -->
</br>
<!-- /#VITIS una experiencia inolvidable -->

<!-- Banner video -->
<section class="parallax0 parallax100" style="background-image: url(images/galeria/parallax2.jpg);">
  <div class="overlay0 p-t-190 p-b-200">
    <div class="flex-col-c-m p-l-15 p-r-15">
      <h3 class="l-text1 fs-35-sm">
        ¡ DISFRUTA VITIS !
      </h3>
    </div>
  </div>
</section>

<!-- Our product -->
<section class="mx-auto">
  <div class="container p-t-19">
    <h2 class="display-6 m-text40 t-center">¡ Pasa unas vacaciones en Vitis y disfruta de esta hermosa tierra !</h2>
    <p class="lead t-center m-textplus">Llegar a Vitis es como visitar el paraíso, su laguna y ríos color turquesa, paisajes verdes y gran historia, lo hace
      uno de los mejores lugares turísticos y preferidos de la Reserva NorYauYos Cochas. Este lugar está lleno de atracciones
      para todos los gustos, si quieres saber más sobre este hermoso Distrito y lugares que visitar ¡sigue leyendo! y te
      daremos algunas recomendaciones para que vayas planeando tu itinerario.</p>
    <hr class="my-4">
    <h2 class="m-text64 t-center">VITIS
      <p class="m-textplus2">¡Tu próxima aventura!</p>
      <p class="lead">
        <a class="" href="#" role="button">
          <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i>
        </a>
      </p>
    </h2>
  </div>
</section>


@endsection
