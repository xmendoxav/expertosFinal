<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoBar</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/vendor/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/vendor/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/vendor/css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--banner-->

  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Nuestras recomendaciones de comidas para ti <?php echo $this->session->userdata('nombre'); ?></h1>
          <p class="header-p">Nuestra seleccion por precio para ti</p>
        </div>
      </div>
      <div class="row">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol id="numeroOpciones"class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
  <!-- Wrapper for slides -->
        <div id= "imagenes"class="carousel-inner">
          <div class="item active">
            <img src="https://mxcity.mx/wp-content/uploads/2016/10/platillos-tipicamente-mexicanos.jpg" alt="Los Angeles">
          </div>

        </div>
  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="fa fa-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="fa fa-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Nuestro Menú</h1>
          <p class="header-p">La mejor calidad en alimentos, organizada para tú comodidad. </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Todo</a></li>
            <li><a class="filter" data-filter=".breakfast">Desayuno</a></li>
            <li><a class="filter" data-filter=".lunch">Comida</a></li>
            <li><a class="filter" data-filter=".dinner">Cena</a></li>
            <li><a class="filter" data-filter=".sugger">Sugerencias</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
          <div class="sugger menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="sugger menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="sugger menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="sugger menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">AutoBar</h4>
            <address>Cerro de Coatepec<br>S/N</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © AutoBar S.A de C.V. Todos los derechos
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Diseñado con <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  <script src="/expertosFinal/autoBar/vendor/js/jquery.min.js"></script>
  <script src="/expertosFinal/autoBar/vendor/js/jquery.easing.min.js"></script>
  <script src="/expertosFinal/autoBar/vendor/js/bootstrap.min.js"></script>
  <script src="/expertosFinal/autoBar/vendor/js/custom.js"></script>
  <script src="/expertosFinal/autoBar/vendor/contactform/contactform.js"></script>

</body>

</html>

<script type="text/javascript">
$(document).ready(function(){
  var datos;

  $.ajax({
    url:"<?php echo base_url(); ?>index.php/Welcome/obtenInfo",
    type: "POST",
    data:{datos:datos},
    succes:function(respuesta){
      console.log("respuesta");

    },error:function(error){
      console.log(error);

    }
  });

 });


</script>
