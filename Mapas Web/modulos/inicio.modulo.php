<?php

if (isset($_SESSION['usuario'])){
		$idusuario=$_SESSION['usuario'];		
	}
	
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/icono.png"/>
    <meta name="description" content="Prueba">
    <meta name="author" content="Feizall Rodriguez">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
    <title>Mapas Web</title>
	
	<!-- ICONOS MATERIALIZE-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

	<!---CSS-->
	<link type="text/css" href="css/materializeV1.css"   rel="stylesheet"/>  

	<!---JAVASCRIPT-->
	<script type="text/javascript" src="js/jquery3-1.js"></script> 
    <script src="js/materialize.js"></script> 
	
	
 </head>

<body>
 
 
 <ul id="slide-out"  class="sidenav PanelDer">
    <li><div class="user-view">
      <div class="background">
        <img src="img/fondousuario.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/avatar.png"></a>
      <a href="#name"><span class="white-text name"><?php echo $idusuario; ?></span></a>
     
       </div>
    </li>
    <li><a class="subheader">Home</a></li>
    <li><a class="waves-effect" href="index2.php"><i class="material-icons">map</i>Mapa Clientes</a></li>
	<li><a class="waves-effect" href="index2.php?mod=heatmap"><i class="material-icons">public</i>Heat Map</a></li>
	<li><a class="waves-effect" href="index2.php?mod=tablaclientes"><i class="material-icons">people</i>Client Table</a></li>
	<li><a href="logout.php"><i class="material-icons">power_settings_new</i>Cerrar Sesion</a></li>

 </ul>
 
 
   <ul class="sidenav" id="mobile-demo">
	 <li><a href="index2.php?mod=heatmap">Heat Map</a></li>
	 <li><a href="index2.php">Client Map</a></li>
	 <li><a href="index2.php?mod=tablaclientes">Tabla Clientes</a></li>
   </ul>
 
 

  <div class="navbar-fixed">
  <nav id="navbar1">
 
   <div class="nav-wrapper light-blue darken-4">

     <a href="#" style=" float:right;" data-target="slide-out" class="sidenav-trigger show-on-large tooltipped" data-tooltip="Home" data-position="left" ><i class="large material-icons">home</i></a>
      <a href="logout.php" class="brand-logo tooltipped" data-position="bottom" data-tooltip="Logout" style="padding-left:15px;">  <i class="large material-icons">lock</i></a>

	 <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down">
		<li><a  href="index2.php?mod=heatmap"><i class="tiny material-icons" style="float:left; padding-right:5px;">public</i>Heat Map</a></li>
		<li><a href="index2.php"><i class="tiny material-icons" style="float:left; padding-right:5px;">map</i>Client Map</a></li>
		<li><a href="index2.php?mod=tablaclientes"><i class="tiny material-icons" style="float:left; padding-right:5px;">people</i>Clientes</a></li>
	
       </ul>
    </div>
  </nav>
  </div>
  
  <br>

  <?php
  
	if(file_exists("modulos/$modulo.modulo.php")){
	   require("modulos/$modulo.modulo.php");
	}
  ?>

	<br><br><br>
	
<footer class="page-footer light-blue darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Cel.</h5>
                <p class="grey-text text-lighten-4">+504 9760-0758</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contactanos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">feizall.rodriguez06@gmail.com</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Feizall Rodriguez
            <a class="grey-text text-lighten-4 right" href="https://www.facebook.com/FeizallJ">Prueba Web Feizall Rodriguez</a>
            </div>
          </div>
</footer>

</body>	
</html>

<script>
$(document).ready(function(){
     $('.sidenav').sidenav();
	 $('.PanelDer').sidenav({edge:'left'}); 
	 $('.tooltipped').tooltip();	
	
 });	
</script>
