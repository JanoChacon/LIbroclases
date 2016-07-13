<?php
session_start();
if ($_SESSION["session"] != true){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Menu</title>
	<!-- responsibe bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<script>
$(document).ready(function(){
    $("#btn-notas").click(function(){
      $.get("vistas/selnotas.php", function(htmlext){
          $("#contenido").html(htmlext);
      });
    });
    $("#btn-anotaciones").click(function(){
      $.get("vistas/anotaciones.php", function(htmlext){
          $("#contenido").html(htmlext);
      });
    });
    $("#btn-vnotas").click(function(e){
       $.get("vistas/notas.php", function(htmlext){
          $("#contenido").html(htmlext);
          location.reload();
      });
    });
});
</script>
<body background="images/bluepaper.jpg">
  <!-- la navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="menu.php">Menú</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Inicio</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="conexiones/closesession.php" type="button" class="btn">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar session</a>
          </li>
        </ul>
        <?php 
        if ($_SESSION["tipo"] ==2){
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="administrar.php" type="button" class="btn">
                  <span class="glyphicon glyphicon-cog"></span> Administrar</a>
                </li>
              </ul>';
        }
         ?>
    </div>
  </nav> 
  <!-- el cuerpo de la pagina -->
  	<div class="container-fluid">
   		<div class="row">
        <!-- barra navegacion vertical -->
  			<div class="col-sm-2">
  				<ul class="nav nav-pills nav-stacked">
				    <li class="active"><a href="menu.php">Menu</a></li>
            <li><a href="#">Asistencias</a></li>
            <li><a href="#" type="button" id="btn-notas">Notas</a></li>
            <li><a href="#" type="button" id="btn-anotaciones">Anotaciones</a></li>
  				</ul>
			</div>
        <!-- cuerpo -->
  			<div class="col-sm-10">
  				<div class="jumbotron">
            <div id="contenido">
              <h2>Menú</h2>
              <br>
              <h4>
                Bienvenido a la portada del libro, seleccione los datos a consultar en la lista de la izquierda.
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </h4>
            </div>
    			</div>
			</div>
		</div>
 	</div>

</body>
</html>