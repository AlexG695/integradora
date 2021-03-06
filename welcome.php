<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Happiness merch!</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/logops.png"> <!--Icono de la página-->

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
              <li><i class="fas fa-map-marker-alt"></i>
                <p class="info-text">Chihuahua, Chih. MX</p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a href="#LINKTOENGLISHSITE!!!" class="badge badge-pill badge-info">ENGLISH</a>
                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="https://twitter.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a title="Instagram" href="https://instagram.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-instagram"></i></span>
                </a>

              </li>
            </ul>
          </div>
          <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </div>
    <!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header-two">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                  <a class="d-block" href="index.html">
                    <img loading="lazy" src="images/logopsINVERT2.png" alt="Constra">
                  </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    </li>


                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">La Empresa <i
                          class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="faq.html">Preguntas Frecuentes</a></li>
                        <li><a href="pricing.html">Cotizaciones</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="projects.html" class="nav-link dropdown-toggle">Catálogo</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                  </ul>
                  <div>
                    <a>Hola, $nom</a>
                  </div>
              </nav>
            </div>
          </div>
          <!--/ Col end -->
        </div>
      </div>
      <!--/ Navigation end -->
    </header>
    <!-- Header END -->


    <div class="banner-carousel banner-carousel-1 mb-0">
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/banner1.png)">
        <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">¡Mercancía que te hace sonreír!</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Happiness Merch</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/banner2.png)">
        <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Productos Extranjeros</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">¡De calidad y a buen precio!</p>
                <p data-animation-in="slideInRight">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/banner3.png)">
        <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Productos 100% Originales</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">¡Gran variedad de marcas!</p>
                <div data-animation-in="slideInLeft">
                  <a href="pricing.html" class="slider btn btn-primary border" aria-label="contact-with-us">Precios</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="call-to-action-box no-padding">
      <div class="container">
        <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">¿Tienes alguna duda?</h3>
              </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="faq.html">Preguntas Frecuentes</a>
              </div>
            </div><!-- col end -->
          </div><!-- row end -->
        </div><!-- Action style box -->
      </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
              <h2 class="into-title">Sobre Nosotros</h2>
              <h3 class="into-sub-title">Somos una empresa ubicada en Chihuahua</h3>
              <p>Somos un grupo de personas que eligen los mejores tenis, ropa y otros productos de Estados Unidos para
                ti.</p>
            </div><!-- Intro box end -->

            <div class="gap-20"></div>



            <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-thumbs-up"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">Servicio de Calidad</h3>
                  </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                  <span class="ts-service-icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <div class="ts-service-box-content">
                    <h3 class="service-box-title">Grupo de profesionales</h3>
                  </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">Nuestros valores</h3>
            <p>Nuestra empresa se compromete a siempre tener el mejor servicio para nuestros clientes, ya que ellos son
              los que nos mantienen en marcha.</p>

            <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Puntualidad
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#our-values-accordion">
                  <div class="card-body">
                    Valoramos el tiempo de nuestros clientes, por eso nos comprometemos a entregarle siempre sus
                    productos a tiempo.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Transparencia
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                  <div class="card-body">
                    La transparencia es un valor clave que realmente valoramos, por esta razón, las citas siempre serán
                    razonables.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Servicio Al Cliente
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                  data-parent="#our-values-accordion">
                  <div class="card-body">
                    Dado que apreciamos tanto a nuestros clientes, siempre nos aseguramos de tener un excelente servicio
                    al cliente, hacemos todo lo posible para comunicarnos y escuchar las necesidades de nuestros
                    clientes.
                  </div>
                </div>
              </div>
            </div>
            <!--/ Accordion end -->

          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->




    <section id="project-area" class="project-area solid-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Como Funciona</h2>
            <h3 class="section-sub-title">Nuestro Servicio</h3>
          </div>
        </div>
        <!--/ Title row end -->
        <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\eye.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Hojear el catálogo</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 1 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\quote.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Cotizar el Producto</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 2 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\pay.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Realizar Pago</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 3 end -->

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="images\shopping.png" alt="service-avater-image">
          </div><!-- Col end -->

          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\confmail.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Confirmar Envio</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\esperar.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Esperar</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images\icon-image\recieve.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Recibir Producto</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end -->
        </div><!-- Content row end -->

      </div>
      <!--/ Container end -->
    </section><!-- Service end -->



    <section class="call-to-action no-padding">
    </section><!-- Action end -->


    <section id="news" class="news">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title"></h2>
            <h3 class="section-sub-title">Productos Recién Llegados</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/justadded1.png" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="news-single.html" class="d-inline-block">Nike Dunk H</a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i> Talla X
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 1st post col end -->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/justadded2.png" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="news-single.html" class="d-inline-block">New Balance 574 </a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i> Talla X
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 2nd post col end -->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                  <img loading="lazy" class="img-fluid" src="images/news/justadded3.png" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="news-single.html" class="d-inline-block">FILA Disruptor </a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i> Talla X
                  </span>
                </div>
              </div>
            </div><!-- Latest post end -->
          </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
          <a class="btn btn-primary" href="projects.html">Ver todo Catálogo</a>
        </div>

      </div>
      <!--/ Container end -->
    </section>
    <!--/ News end -->


<!-- Footer START -->

    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">Sobre Nosotros</h3>
              <img loading="lazy" width="200px" class="footer-logo" src="images/logopsINVERT.png" alt="Constra">
              <p>Empresa de Chihuahua, Chih, Mx especializada en vender productos extranjeros de calidad.</p>
              <div class="footer-social">
                <ul>
                  <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                        class="fab fa-instagram"></i></a></li>

                </ul>
              </div><!-- Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Horario</h3>
              <div class="working-hours">
                Trabajamos los 7 días de la semana, todos los días excepto los festejos importantes.
                <br><br> Servicio al cliente: <span class="text-right">0800 - 2100 </span>
                <br> Correo electrónico: <span class="text-right">24/7</span>
              </div>
            </div><!-- Col end -->

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 ">
              <h3 class="widget-title">Enviamos Por</h3>
              <ul class="list-arrow">
                <li>FedEx</li>
                <li>UPS</li>
                <li>DHL</li>
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div>
      <!-- Footer main end -->


      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-info text-center text-md-left">
                <span>Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                  </script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span>
              </div>
            </div>

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer>
    
    <!-- Footer end -->


    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>

  </div><!-- Body inner end -->
</body>

</html>