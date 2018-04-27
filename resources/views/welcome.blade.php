<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <title>Vitis|Para el mundo</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="fonts/themify/themify-icons.css">
  <link rel="stylesheet" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="fonts/elegant-font/html-css/style.css">
  <link rel="stylesheet" href="css/animate.css">  
  <link rel="stylesheet" href="css/hamburgers.min.css">
  <link rel="stylesheet" href="css/animsition.min.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="{{ asset('css/util.css') }}">
  <link rel="stylesheet" href="css/main.css">
  
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="animsition">
  <!-- header fixed -->
  <div class="wrap_header fixed-header2 trans-0-4">
  
    <!-- Logo -->
    <a href="#" class="logo align-self-center">
      <img src="images/logo.svg" width="200" alt="Logo VITIS">
    </a>
    <!-- Menu -->
    <div class="wrap_menu">
      <nav class="menu">
        <ul class="main_menu">
          <li>
            <a href="#">Inicio</a>
          </li>
          <li>
            <a href="#">Entretenimiento</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Hospedaje</a>
              </li>
              <li>
                <a href="#">Comida</a>
              </li>
              <li>
                <a href="#">Compras</a>
              </li>
              <li>
                <a href="#">Sitios de interes</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Historia</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Costumbres</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Mapas</a>
          </li>
          <li>
            <a href="#">Galeria</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Fotos</a>
              </li>
              <li>
                <a href="#">Videos</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Blog</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Noticas</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">FAQs</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Header Icon -->
    <div class="header-icons align-self-center">
      <a href="#" class="header-wrapicon1 dis-block">
        <button type="button" class="btn btn-verde btn-sm ">Registar</button>
      </a>
      <div class="header-wrapicon2">
        <button type="button" class="btn btn-verde btn-sm">Login</button>
      </div>
    </div>
  </div>
  <!-- top menu -->    
    <nav class="navbar-expand-md navbar-dark bg0 d-none d-sm-block" style="width: 100%; height: 4%;">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mx-auto align-baseline">
          <li class="col nav-item active">
            <a class="text-white" href="#">Historias</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Mapas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Noticas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Galería</a>
          </li>
        </ul>
      </div>
    </nav>

  <!-- Header 2-->
  <header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-10">
    
      <div class="topbar2">
        <div class="topbar-social">
          <a href="#" class="topbar-social-item fa fa-facebook"></a>
          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
        </div>
         
        <!-- Logo2 -->
        <a href="#" class="logo2">
          <img src="images/logo.svg" width="300" alt="Logo VITIS">
        </a>
        <div class="topbar-child2">
          <!--  -->
          <button type="button" class="btn btn-verde btn-sm">Registar</button>
          <span class="linedivide1"></span>
          <button type="button" class="btn btn-verde btn-sm">Login</button>
          <!-- Header cart noti -->
        </div>
      </div>
      <div class="wrap_header p-t-10">
        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu p-t-10">
            <ul class="main_menu">
              <li>
                <a href="#">Inicio</a>
              </li>
              <li>
                <a href="#">Gestión</a>
              </li>
              <li class="sale-noti">
                <a href="#">Entretenimiento</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Hospedaje</a>
                  </li>
                  <li>
                    <a href="#">Comida</a>
                  </li>
                  <li>
                    <a href="#">Compras</a>
                  </li>
                  <li>
                    <a href="#">Sitios de interes</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#">Historia</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Costumbres</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="about.html">Mapas</a>
              </li>

              <li>
                <a href="#">Galería</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Fotos</a>
                  </li>
                  <li>
                    <a href="home-#">Videos</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#">Blog</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Noticias</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">FAQs</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="#" class="logo-mobile">
        <img src="images/logo.svg" width="100" alt="Logo VITIS">
      </a>
      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
          <span class="linedivide2"></span>
          <!-- Header cart noti -->
          <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </div>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div class="wrap-side-menu">
        <nav class="side-menu">
          <ul class="main-menu">
            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
              <button type="button" class="btn btn-verde">Registar</button>
              <button type="button" class="btn btn-verde">Login</button>
            </li>


            <li class="item-topbar-mobile p-l-10">
              <div class="topbar-social-mobile">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
              </div>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Inicio</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Gestión</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Entretenimiento</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Hospedaje</a>
                </li>
                <li>
                  <a href="#">Comida</a>
                </li>
                <li>
                  <a href="#">Compras</a>
                </li>
                <li>
                  <a href="#">Sitios de interes</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Historia</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Costumbres</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Mapas</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Galería</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Fotos</a>
                </li>
                <li>
                  <a href="#">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Noticas</a>
                </li>
                <li>
                  <a href="#">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">FAQs</a>
            </li>
          </ul>
        </nav>
      </div>
  </header>
   <!-- Fin Header 2-->
    <!-- Slide1 -->    
<!--Carousel Wrapper-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <!-- Slide One - Set the background image for this slide in the line below -->
    <div class="carousel-item active" style="background-image: url('image/fondo.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h3>First Slide</h3>
        <p>This is a description for the first slide.</p>
      </div>
    </div>
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('image/fondo.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h3>Second Slide</h3>
        <p>This is a description for the second slide.</p>
      </div>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('image/fondo.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h3>Third Slide</h3>
        <p>This is a description for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--/.Carousel Wrapper-->
                
   
    <!-- Sliders -->
    <section class="carousel-inner  p-t-10">
      <div class="wrap-slick1">
        <div class="slick1">
          <div class="contenido item-slick1" style="background-image: url(image/fondo.jpg);">
            <div class="wrap-content-slide1 flex-col-c-m p-l-15 p-r-15 p-t-10 p-b-10">                   
              
              <h1 class="caption1-slide1  t-center animated visible-false m-b-15 mt-4" data-appear="fadeInDown">
                Bienvenido a: <strong class="text-md-left col-sm-100"> VITIS</strong>
              </h1>
    
              <h5 class="caption2-slide1 t-center animated visible-false m-b-180" data-appear="fadeInUp">
                 “Hermosa tierra de los AYLLUS”
              </h5>
    
              
                <!-- Button -->
               
                <div class="wrap-btn-slide1 justify-content-center text-center animated visible-false pb-0 " data-appear="zoomIn">
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
    
          <div class="contenido item-slick1 item2-slick1" style="background-image: url(images/galeria/parallax1.jpg);">
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
    
          <div class="contenido item-slick1 item3-slick1" style="background-image: url(images/galeria/parallax2.jpg);">
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
  <!-- Fin Nav Celeste-->

  
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
<div class="container">
  
    <div class="conta flex-l-m">    
      <p class="m-text64 text-right">#VITIS
        <p class="m-text44">&#32;una experiencia inolvidable.</p>
      </p>
    </div>
  </div>
</div>

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
  <!-- Fin Parallax 1 -->
  <div class="container">
    
      <div class="conta flex-r-m">
        <p class="m-text64 text-right">#VITIS
          <p class="m-text44">&#32; descúbrelo y vívelo.</p>
        </p>
      </div>
    
  </div>

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

   <div class="jumbotron bg500 text-light text-center">

    <div class="container">
      
        <div class="row vdivide">
          <div class="col text-center">
            <br>
            <div class="textoiz">
              <h2 class="m-textplus6">Blog</h2>
              <p class="m-textplus3m">Tips de turismo </p>
              <p class="m-textplus3m">y algo más</p>
            </div>
            <div class="visible">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </div>
          </div>
          <div class="col text-center">
            <br>
            <div class="textode">
              <h2 class="m-textplus6">FAQs</h2>
              <p class="m-textplus3m">Algunas preguntas</p>
              <p class="m-textplus3m">que nos hacemos</p>
            </div>
            <div class="visible">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>
   
    </div>


 
  </div>
  <br>
  <br>
  <br>
  <!-- Instagram -->


  

























  


  <section class="p-t-10">
    <div class="sec-title p-b-52 p-l-15 p-r-15">
      <h3 class="m-text5 t-center">
        Experiencias
      </h3>
    </div>

      <div class="container  my-3">
      
        <div id="recipeCarousel" class="carousel slide w-180" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            
               <div class="carousel-item row no-gutters active">

               <div class="col-6 float-left">
                  <div class="row ">
                     <div class="col-md-4">
                     <img src="image/person1.jpg" class="w-100">
                     </div>
                     <div class="col-md-6 px-3">
                     <div class="card-block px-3">
                        <h4 class="card-title">Lorem ipsum</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                        </p>
                     </div>
                     </div>
                  </div>

               </div>

               <div class="col-6 float-left">
                     <div class="row ">
                     <div class="col-md-4">
                        <img src="image/person2.jpg" class="w-100">
                     </div>
                     <div class="col-md-6 px-3">
                        <div class="card-block px-3">
                           <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                           <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           </p>
                        </div>
                     </div>
                     </div>
               </div>
         
               </div>
               
               <div class="carousel-item row no-gutters">
                  <div class="col-6 float-left">
                     <div class="row ">
                        <div class="col-md-4">
                           <img src="image/person1.jpg" class="w-100">
                        </div>
                        <div class="col-md-6 px-3">
                           <div class="card-block px-3">
                              <h4 class="card-title">Lorem ipsum</h4>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                 dolore magna
                              </p>
                           </div>
                        </div>
                     </div>

                  </div>

                  <div class="col-6 float-left">
                     <div class="row ">
                        <div class="col-md-4">
                           <img src="image/person2.jpg" class="w-100">
                        </div>
                        <div class="col-md-6 px-3">
                           <div class="card-block px-3">
                              <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                              <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

                             
      
          </div>


          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
     
  </section>
<br>
<br>
<br>
  <div class="footer02">
      <section class="containe02 bg501">
        
          <div class="row">
            <div class="col-sm-2  text-center">
              <br>
              <ul class="footer01">
                <li class="p-b-9">
                  <a href="#" class="footer01">Inicio</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Hospedaje</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Comida</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Compras</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Sitios de interes</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Como llegar</a>
                </li>
              </ul>

            </div>
            <div class="col-sm-2 align-self-center text-center">
              <ul>
                <li class="p-b-9">
                  <a href="#" class="footer01">Historia</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Mapas</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Noticias</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Galería y Fotos</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-2 align-self-center">
              <div class="text-right">
                <a href="#" class="text-white fa fa-facebook-square fa-4x"></a>
              </div>
            </div>

            <div class="col-sm-2 align-self-center">
              <div class="text-left">
                <a href="#" class="text-white fa fa-youtube fa-4x"></a>
              </div>
            </div>



            <div class="col-sm-2 align-self-center text-center">
              <p class="footer01m">
                Al suscribirte recibirás las últimas noticias y promociones para la visita turística del Distrito de Vitis
              </p>
            </div>
            <div class="col-sm-2 align-self-center text-center">
              <!-- Button -->
              <button type="button" class="btn btn-verde btn-lg">Suscribete</button>
            </div>
          </div>
        
      </section>
  </div>
  <br>
<br> 
  <br>
  <div class="footer03">
    <div class="container bg502a">
        <div class="row vdivide">
         <div class="col-6 align-self-center text-center">
                <p class="footer01m1">
                  Al suscribirte recibirás las últimas noticias y promociones para la visita turística del Distrito de Vitis.
                </p>
          </div>
          <div class="col-4 align-self-center text-center">
                
                   <button type="button" class="btn btn-verde btn-sm ">Suscribete</button>
                
          </div>
        </div>
    </div>
  </div>

  <div class="container bg502">
   <div class="footer03 ">
    <div class="row vdivide">
            <div class="col">
              <div class="text-right">
                <a href="#" class="footer01">Mapa de Sitio</a>
              </div>
            </div>

            <div class="col">
              <div class="text-right">
                <a href="#" class="text-white fa fa-facebook-square fa-2x"></a>
              </div>
            </div>

            <div class="col">
              <div class="text-center">
                <a href="#" class="text-white fa fa-youtube fa-2x"></a>
              </div>
            </div>

       </div>
   </div>
  </div>





<!--Footer-->
<footer>

  <!--Footer Links-->
  <div class="container-fluid py-3 text-center text-md-left bg-white">
    <div class="row">

      <!--First column-->
      <div class="col t-center">
        <h4 class="text-dark t-center">
          MUNICIPALIDAD DISTRITAL
        </h4>
        <h4 class="text-dark t-center">
          DE VITIS
        </h4>
        <p>Yauyos - Lima</p>
      </div>
      <!--/.First column-->
    </div>
  </div>
  <!--/.Footer Links-->
  <!--Copyright-->
  <div class="py-2 px-3 lead t-center grey lighten-3 s-text8">
    <div class=" mx-auto" style="width: 65%;">
      
      VITIS PARA EL MUNDO, es una iniciativa de la Municipalidad para la promoción turística del Distrito. Todos los Derechos
     Reservados © 2018. Diseño Web MA Design Studio - Fotografía: Manuel Hinostroza
     por <a class="cyan-text" href="https://facebook.com/freecloud.pe/" target="_blank"> <i class="red-text fa fa-heart-o" aria-hidden="true"></i> FreeCloud</a>   
    </div>
  </div>
  <!--/.Copyright-->
</footer>
<!--/.Footer-->
                      






  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </span>
  </div>
    
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  
  <script type="text/javascript" src="js/animsition.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/mdb.min.js"></script>  
  <script type="text/javascript" src="js/select2.min.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick-custom.js"></script>
  <script type="text/javascript" src="js/countdowntime.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>