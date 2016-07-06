<?php
session_start();
if ($_SESSION["session"] != true){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<!-- responsibe bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body background="images/fondo-azul.jpg">
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
          <li><a href="controllers/closesession.php" type="button" class="btn">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar session</a>
          </li>
        </ul>
        <<?php 
        if ($_SESSION["tipo"] ==0){
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
            <li><a href="#">Notas</a></li>
            <li><a href="#">Anotaciones</a></li>
  				</ul>
			</div>
        <!-- cuerpo -->
  			<div class="col-sm-10">
  				<div class="jumbotron">
            <div class="contenido">
              <h2>vistas?</h2>
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
  <!--pie-->
  <div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Alejandro Chacon !© 2016</p>
      </div>
    </footer>
  </div>
</body>
</html>