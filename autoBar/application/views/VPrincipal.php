<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AutoBar</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- SCRIPT para agregar un usuario allí mismo -->
<script type="text/javascript">
  function addUsr(){
    var name = document.getElementById('name').value;
    var apellidos = document.getElementById('apellidos').value;
    var email = document.getElementById('email').value;
    var age = document.getElementById('age').value;
    var sexo = document.getElementById('sexo').value;
    var pswL = document.getElementById('pswL').value;
    var l_nac = document.getElementById('l_nac').value;
    $.ajax({
      url:"<?php echo base_url() ?>index.php/Welcome/registrarUsr",
      type:"POST",
      data:{name:name, apellidos:apellidos, email:email, age:age, sexo:sexo, pswL:pswL, l_nac:l_nac},
      success: function(){
        alert("¡Nuevo Usuario Registrado!\n\nBienvenido "+name+" "+apellidos+"\nYa puedes disfrutar de nuestros servicios");
      }
    });
  }
</script>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#event">Otra Opcion</a>
            <a href="#contact">Registrarse</a>
            <a href="#about">Conocenos</a>
            <a href="#menu-list">Menú</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="logo-name">AutoBar</h1>
            <h2>Servicio Automatizado de Comida.</h2>
          </div>

          <form class="" action="<?php echo base_url(); ?>index.php\Welcome\ingresar" method="post">
          <div class="col-sm-2">
            <h2>Bienvenido!</h2>
          </div>
          <div class="col-md-6 col-sm-2" style="margin-top: 35px; margin-bottom: 35px;">
            <input type="text" class="form-control label-floating is-empty" id="nombre" name="nombre" placeholder="Nombre" data-rule="required" data-msg="Campo requerido" />
          </div>
          <div class="col-md-6 col-sm-2" style="margin-bottom: 50px;">
            <input type="password" class="form-control label-floating is-empty" name="psw" id="psw" placeholder="Contraseña" data-rule="required" data-msg="Campo requerido" />
          </div>
          <div class="col-md-6 col-sm-2">
            <input type="submit" class="contacts-btn" name="ingresar" value="Entrar">
          </form>
          <?php if (isset($_SESSION['success'])) { ?>
		        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
			    <?php
			    } ?>

			    <?php if (isset($_SESSION['error'])) { ?>
			        <div class="alert alert-danger echo $_SESSION['error']"> <?php echo $_SESSION['error']; ?></div>
			    <?php
			    } ?>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- / banner -->

  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">¿Tu primera vez con nosotros?</h1>
          <p class="header-p">Suscribete para un servicio personalizado. </p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Dudas y/o aclaraciones</h4>
              <p class="light-blue regular alt-p">+55 7223831793 - <span class="contacts-sp">Servicio a domicilio</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Horario</h4>
              <p class="light-blue regular alt-p"> Lunes a Viernes 9:00 - 22:00</p>
              <p class="light-blue regular alt-p">
                Sabado & Domingo 10:00 - 20:00
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-sm-8">
          <form action="<?php echo base_url(); ?>index.php\Welcome\registrarUsr" method="post">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:3" required/>
                <div></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="apellidos" id="apellidos" placeholder="Apellidos" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Email" data-rule="email" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="number" class="form-control label-floating is-empty" name="age" id="age" placeholder="Edad" required/>
                <div></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
             <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="l_nac" id="l_nac" placeholder="Lugar de Nacimiento" required />
                <div></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <select id="sexo" required>
                  <option selected>Sexo ... </option>
                  <option value="F">Femenino</option>
                  <option value="M">Masculino</option>
                </select>
                <div></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="password" class="form-control label-floating is-empty" id="pswL" placeholder="Contraseña" required/>
                <div></div>
              </div>
            </div>
          </div>

            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <input class="contacts-btn" type="button" value="Registrarse" onclick="addUsr()" >
                <input style="margin-left: 190px;" class="contacts-btn" type="reset" value="Borrar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->

  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">¿Quienes somos?</h1>
          <p class="header-p">Somos una organización diferente en los servicios de comida rápida, con una propuesta de trabajo innovadora. </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">¿Como lo hacemos?</h2>
              <p>A través de un sistema inteligente de servicio de comida automatzado, brindandole al usuario la mejor experiencia en el mercado!</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Experiencia personalizada.</li>
                  <li><i class="fa fa-check"></i>Efciencia en el servicio.</li>
                  <li><i class="fa fa-check"></i>Sin interacción con humanos.</li>
                  <li><i class="fa fa-check"></i>Amigable, sencillo y intuitivo.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
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
  <script src="expertosFinal/autoBar/js/jquery.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/custom.js"></script>
  <script src="/contactform/contactform.js"></script>

</body>

</html>

<script type="text/javascript">
$(document).ready(function(){

    $("#menu-list").hide();
 });
 function ingresa(){
   document.getElementById('id').value;
   document.getElementById('id').value;

 }
</script>
