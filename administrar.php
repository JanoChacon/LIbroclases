<?php
session_start();
include('conexiones/vsession.php?vadmin=true');

if ($_SESSION["tipo"] !=2){
  header('Location: menu.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administracion</title>
	<!-- responsibe bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="js/Administrar.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-aduser").click(function(){
      $.get("vistas/crearUser.php", function(htmlext){
          $("#admincont").html(htmlext);
      });
    });
  });
</script>
<body background="images/papeltile.jpg">
  <!-- la navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="administrar.php">Administracion</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="menu.php">Menú</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="conexiones/cerrarSession.php" type="button" class="btn">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar session</a>
          </li>
        </ul>
    </div>
  </nav> 
  <!-- el cuerpo de la pagina -->
  	   <div class="container-fluid">
      <div class="row">
        <!-- barra navegacion vertical -->
        <div class="col-sm-2">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#" type="button" id="btn-aduser">Administar Usuarios</a></li>
            <li><a href="#">Registros</a></li>
          </ul>
      </div>
        <!-- cuerpo -->
        <div class="col-sm-10">
          <div class="jumbotron">
            <div id="admincont">
              <h3>Seleccione una funcion</h3>
              <p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </p>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>