<?php 
include('conexiones/vsession.php')
;?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Menu</title>
	<!-- responsibe bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="js/funcionesmenu.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="images/icon.png">
</head>
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
          <li><a href="conexiones/cerrarSession.php" type="button" class="btn">
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
				    <li id="menu1" class="active" ><a href="menu.php">Menu</a></li>
            <li id="menu3"><a href="#" type="button" id="btn-notas">Calificaciones</a></li>
            <li id="menu2"><a href="#" type="button" id="btn-anotaciones">Hoja de vida</a></li>
            <li id="menu3"><a href="#" type="button" id="btn-asist">Asistencias</a></li>
            <li id="menu4"><a href="#" type="button" id="btn-activ">Registro Actividad</a></li>
            <li id="menu5"><a href="#" type="button" id="btn-alumnos">Alumnos</a></li>
            <li id="menu6"><a href="#" type="button" id="btn-curso">Cursos</a></li>
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

<div class="modal fade" id="crea-anot-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Crear Nueva Anotacion</h4>
            </div>
            <form class="form-horizontal" method="post" role="form" id="anotcrea-form">
              <div class="modal-body">
                      <div class="row">
                          <div class="col-sm-4">
                            <label class="control-label" for="rutProf">Rut Profesor:</label>
                            <input type="text" class="form-control" name="rutProf" placeholder="11111111-1">
                          </div>
                          <div class="col-sm-4">
                            <label class="control-label" for="fecha">Fecha:</label>
                            <input type="text" class="form-control" name="fecha" placeholder="aaaa-mm-dd">
                          </div>
                          <div class="col-sm-4">
                            <input type="text" required="required" readonly="readonly" id="rutAl" name="rutAl" readonly="readonly" style="visibility:hidden; height:1px;"/>
                          </div>
                      </div>
                      <div class="row">
                        <br>
                          <div class="col-sm-12">
                            <label class="control-label" for="anot">Anotacion:</label>
                             <textarea input type="text" class="form-control" name="anot" placeholder="Anotacion..."></textarea>
                          </div>
                      </div>             
              </div>
            <div class="modal-footer">
                <input type="submit" value="Ingresar" class="btn btn-warning" id="btn-anotacioncrear" data-dismiss="modal"/>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>