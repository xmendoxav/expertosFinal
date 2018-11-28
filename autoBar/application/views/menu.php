<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoBar</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/expertosFinal/autoBar/css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<script type="text/javascript">
  function startTime(){
    today=new Date();
    h=today.getHours();
    m=today.getMinutes();
    s=today.getSeconds();
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
    t=setTimeout('startTime()',500);
  }

  function checkTime(i){
    if (i<10){
      i="0" + i;
    }
    return i;
  }

  function checaHora(){
    alert(h+":"+m+":"+s);
  }

  window.onload=function(){
    startTime();
    checaHora();
  }
</script>

<style type="text/css">
  #columnas{
   column-count:3;
   column-gap:10px;
   column-rule:5px Outset gray;
}
</style>

<body>
  <!-- ESTA ES LA SECCION DE RECOMENDACION POR LA HORA DEL DÍA-->
  <section id="xHour">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">¿Qué hora es?</h1>
          <div id="reloj" style="font-size:20px;"></div>
        </div>
      </div>
      <div class="row">
        <div id="columnas">
          <li>Ataúlfo</li>
          <li>Sigerico</li>
          <li>Walia</li>
        </div>
      </div>
  </section>
  <!--AQUI ACABA LA SECCION DE RECOMENDACION POR LA HORA DEL DÍA-->

  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Nuestras recomendaciones de comidas para ti <?php echo $this->session->userdata('nombre'); ?></h1>
          <p class="header-p">Lo más valorado</p>
        </div>
      </div>
      <?php if ($consumos != NULL){ ?>
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
    </div><?php }else {?>
      <div class="row">
        <div class="row">
          <div class="col-md-12 text-center marb-35">
            <h1 class="header-h">Eres nuevo eh?</h1>
            <p class="header-p">Te invitamos a que sigas disfrutando de nuestra amplia variedad de comida </p>
            <p class="header-p">Te presentamos nuestro menú</p>
          </div>
        </div>
      </div>
    <?php } ?>
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
            <li><a class="filter" data-filter=".sodas">Bebidas</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">
         <?php for ($i=0; $i <count($desayunos) ; $i++) {?>
          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $desayunos[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $desayunos[$i]["precio"] ?></span>
            </span>
            <span class="menu-subtitle"><?php echo $desayunos[$i]["descripcion"] ?></span>
          </div>
        <?php } ?>
        <?php for ($i=0; $i < count($comidas); $i++)  { ?>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $comidas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $comidas[$i]["precio"] ?></span>
            </span>
            <span class="menu-subtitle"><?php echo $comidas[$i]["descripcion"] ?></span>
          </div>
        <?php } ?>
        <?php for ($i=0; $i <count($cenas) ; $i++) { ?>
        <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $cenas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $cenas[$i]["precio"] ?></span>
            </span>
            <span class="menu-subtitle"><?php echo $cenas[$i]["descripcion"] ?></span>
          </div>
        <?php } ?>
        </div>
        <?php for ($i=0; $i <count($bebidas) ; $i++) { ?>
        <div class="sodas menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $bebidas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $bebidas[$i]["precio"] ?></span>
            </span>
            <span class="menu-subtitle"><?php echo $bebidas[$i]["descripcion"] ?></span>
          </div>
        <?php } ?>
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
  <script src="/expertosFinal/autoBar/js/jquery.min.js"></script>
  <script src="/expertosFinal/autoBar/js/jquery.easing.min.js"></script>
  <script src="/expertosFinal/autoBar/js/bootstrap.min.js"></script>
  <script src="/expertosFinal/autoBar/js/custom.js"></script>
  <script src="/expertosFinal/autoBar/contactform/contactform.js"></script>

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
