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
<style type="text/css">
  #columnas{
   column-count:3;
   column-gap:10px;
   column-rule:5px Outset gray;
}
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}

</style>

<body>
  <!-- ESTA ES LA SECCION DE RECOMENDACION POR LA HORA DEL DÍA-->
  <section id="xHour">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">¿Qué hora es?</h1>
          <h1 class="header-h">Nuestra recomendación de la hora</h1>
          <div id="reloj" style="font-size:20px;"></div>
        </div>
      </div>
      <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php for ($i=1; $i <count($recomendacionHora); $i++) { ?>
              <li data-target="#myCarousel" data-slide-to=" <?php echo $i; ?> " ></li>
            <?php }?>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src= <?php echo $recomendacionHora[0]["imagen"]; ?> alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3> <?php echo $recomendacionHora[0]["nombre"]; ?> </h3>
                <p> <?php echo $recomendacionHora[0]["descripcion"]; ?> </p>
              </div>
            </div>

            <?php for ($i=1; $i <count($recomendacionHora) ; $i++) { ?>
              <div class="item">
                <img src=<?php echo $recomendacionHora[$i]["imagen"]; ?> alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3><?php echo $recomendacionHora[$i]["nombre"]; ?></h3>
                  <p><?php echo $recomendacionHora[$i]["descripcion"]; ?></p>
                </div>
              </div>
            <?php }?>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
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
        <!-- SI HAY CONSUMOS-->
        <!-- LO MÁS VALORADO!!!!-->
      <div class="row">
        <!--aqui vamos a agregar los tipos de sugerencias por los diferentes tipos-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php for ($i=1; $i <4; $i++) { ?>
              <li data-target="#myCarousel" data-slide-to=" <?php echo $i; ?> " ></li>
            <?php }?>
          </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
        <div class="item active">
              <img src= <?php echo $comidaValorada[0]["info"]["imagen"]; ?> alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3> <?php echo $comidaValorada[0]['info']["nombre"]; ?> </h3>
                <h3> <?php echo $comidaValorada[0]["avg"]; ?> </h3>
                <p> <?php echo $comidaValorada[0]["info"]['descripcion']; ?> </p>
              </div>
          </div>

          <?php for ($i=1; $i <4 ; $i++) { ?>
              <div class="item">
                <img src=<?php echo $comidaValorada[$i]["info"]["imagen"]; ?> alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3> <?php echo $comidaValorada[$i]['info']["nombre"]; ?> </h3>
                <h3> <?php echo $comidaValorada[$i]["avg"]; ?> </h3>
                <p> <?php echo $comidaValorada[$i]["info"]['descripcion']; ?> </p>
                </div>
              </div>
            <?php }?>

        </div>
  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

  <?php }else {?><!-- NO HAY CONSUMOS DEL USUARIO -->
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
          <a class="btn btn-success" data-toggle="modal" data-target="#myModal" data-meal-img="assets/img/restaurant/rib.jpg">Ver agregados</a>

        </div>

        <div id="menu-wrapper">
         <?php $j = 0; for ($i=0; $i <count($desayunos) ; $i++) {?>
          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" onclick="mostrar(<?php echo $desayunos[$i]["nombre"] ?>)" href="#" data-toggle="modal" data-target="#myModal" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $desayunos[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span id="<?php echo $desayunos[$i]["nombre"] ?>" class="menu-price" value = "<?php echo $desayunos[$i]["precio"] ?>">$<?php echo $desayunos[$i]["precio"] ?></span>
              <span><button type="button" value="<?php echo $desayunos[$i]["nombre"].'/$'.$desayunos[$i]["precio"];?>" id="<?php echo $j;?>" name="button" class="btn btn-success" onclick="agregar(<?php echo $j;?>)"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
              </button></span>
            </span>
            <div class="opciones">

            </div>
            <span class="menu-subtitle"><?php echo $desayunos[$i]["descripcion"] ?></span>
          </div>
        <?php $j = $j+1; }  ?>
        <?php for ($i=0; $i < count($comidas); $i++)  { ?>
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" onclick="despliega(<?php echo $j;?>)" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $comidas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $comidas[$i]["precio"] ?></span>
              <span><button type="button"value="<?php echo $comidas[$i]["nombre"].'/$'.$comidas[$i]["precio"];?>" id="<?php echo $j;?>" name="button" class="btn btn-success" onclick="agregar(<?php echo $j?>)"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
              </button></span>
              <div class="" id="opciones">
                </div>

            </span>
            <span class="menu-subtitle"><?php echo $comidas[$i]["descripcion"] ?></span>
          </div>
        <?php $j = $j+1;} ?>
        <?php for ($i=0; $i <count($cenas) ; $i++) { ?>
        <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-toggle="modal" data-target="#myModal" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $cenas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $cenas[$i]["precio"] ?></span>
              <span><button type="button" value="<?php echo $cenas[$i]["nombre"].'/$'.$cenas[$i]["precio"];?>" id="<?php echo $j;?>" name="button" class="btn btn-success" onclick="agregar(<?php echo $j?>)"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
              </button></span></span>
            <span class="menu-subtitle"><?php echo $cenas[$i]["descripcion"] ?></span>


          </div>
        <?php $j = $j+1;} ?>
        </div>
        <?php for ($i=0; $i <count($bebidas) ; $i++) { ?>
        <div class="sodas menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-toggle="modal" data-target="#myModal" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $bebidas[$i]["nombre"] ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $bebidas[$i]["precio"] ?></span>
              <span><button type="button" value="<?php echo $sodas[$i]["nombre"].'/$'.$sodas[$i]["precio"];?>" id="<?php echo $j;?>" name="button" class="btn btn-success" onclick="agregar(<?php echo $j?>)"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
              </button></span></span>
            </span>
            <span class="menu-subtitle"><?php echo $bebidas[$i]["descripcion"] ?></span>
          </div>
        <?php $j = $j+1;} ?>
        </div>

      </div>
    </div>
  </section>
  <div class='modal fade' id='myModal' role='dialog'>
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alimentos ordenados</h4>
          <form>
            Califica nuestra comida(escala de 1-10)
            <div class="form-group label-floating is-empty">
              <input type="text" name="name" class="form-control" id="calificacion" placeholder="calificacion" data-rule="minlen:3" data-msg="tu valoración" pattern="^(?:[1-9]|10)$" />
              <div class="validation"></div>
            </div>

        </div>
        <div class="modal-body" id="infoPlatillo"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" onclick="realizar()" data-dismiss="modal">Realizar</button>
          <button type="button" class="btn btn-outline-warning" onclick="borrar()" data-dismiss="modal">Borrar pedido</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
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
  <script src="/expertosFinal/autoBar/css/bootstrap.min.css"></script>

</body>

</html>

<script type="text/javascript">
function realizar(){
var calificacion = document.getElementById('calificacion').value;

  console.log(calificacion);
   var datos = document.querySelectorAll("#infoPlatillo p");
  for (var i = 0; i < datos.length; i++) {
    var tratada =  datos[i].textContent;
    tratada = tratada.split("/");
    tratada = tratada[0];
    $.ajax({
      url:"<?php echo base_url(); ?>index.php/Welcome/agregaAlMenu",
      type: "POST",
      data:{tratada:tratada, calificacion:calificacion},
      succes:function(respuesta){
        alert(respuesta)

      },error:function(error){
        console.log(error);

      }
    });
  }
  alert("Tu compra ha sido realizada, vuelve pronto")



}

$(document).ready(function(){
  $("#opcion").click(function(){
    console.log("Click");
    });
  $('input:radio[name=estrellas]:checked').click(function(){
    console.log($('input:radio[name=edad]:checked').val());

  });
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
 var html = " ";
 function agregar(valor){
   var nombre = document.getElementById(valor).value;
   //var precio = document.getElementsByName(nombre).value;
   console.log(nombre);
   html += "<p>"+nombre+"</p>"
   var precio = nombre.split("/");
   precio = precio[1];
   precio = precio.split("$");
   precio = precio[1];
   precio = precio+precio
   variable = "<p>Precio total"+precio+"</p>"
   console.log(precio);
   document.getElementById('infoPlatillo').innerHTML = html
   //document.getElementById('infoPlatillo').innerHTML = html+ variable
   alert("Producto agregado correctamente")
 }

 function mostrar(nombre){
   alert(nombre)
   document.getElementById("infoPlatillo").innerHTML = nombre;
 }
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

  function traeComidaxHora(tComida){
    alert("Entramos a traeComidaHora"+tComida);
    console.log('Entramos a traeComidaxHora x2');
    $.ajax({
      url:"<?php echo base_url() ?>index.php/Welcome/traeComidaxHora",
      type:"POST",
      data:{tComida:tComida},
      succes: function(respuesta){
        console.log(respuesta);
      },error: function(error){
        console.log(error)
      }
    });
  }

  function decideComidaHora(){
    //Hora de atencion de 07:00 a 23:00
    // 7 Se abre a las 7
    // 23 Se cierra a las 23;
    // 11 El desayuno acaba a las 11:00
    // 18 La comida acaba a las 18:00
    // 23 LA cena acaba a las 23:00 (Hora del cierre)
    alert(h+":"+m+":"+s);
    if((h>=7) && (h<=11)){
      //Hora del desayuno
      var tComida = 'D';
      alert("Hora del desayuno");
    }else if((h>=11)&&(h<=18)){
      //Hora de la comida
      var tComida = 'C';
      alert("Hora de la comida");
    }else if((h>=18)&&(h<=23)){
      //Hora de la cena
      var tComida = 'CE';
      alert("Hora de la cena");
    }
  }

  window.onload=function(){
    startTime();
    //decideComidaHora();
  }


</script>
