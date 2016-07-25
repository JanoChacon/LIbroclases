<?php
session_start();
if ($_SESSION["session"] == true){
  header('Location: menu.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Schoolsys</title>
	<!-- responsive bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png"> 
    
    <style>
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
  </style>
  <script>
    $(document).on("ready",function(){
    $("#btn-enviar").click(function(e){
    e.preventDefault();
    var pet = $("form").attr("action"); 
    var met = $("form").attr("method"); 
    $.ajax({ 
      url: 'conexiones/vlogin.php',
      type: met,
      data: $("form").serialize(),
      success: function(info){
        $("#nologin").html(info);
         location.reload(); }
        });
      }); 
    }); 
  </script>
</head>
<body background="images/bluepaper.jpg">
  <!-- la navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Schoolsys</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a type="button" class="btn" data-toggle="modal" data-target="#ModalReg">
            <span class="glyphicon glyphicon-user"></span> ¿Como obtener una cuenta?</a>
          </li>
          <li><a type="button" class="btn" data-toggle="modal" data-target="#Modalogin">
            <span class="glyphicon glyphicon-log-in"></span> Entrar</a>
          </li>
        </ul>
    </div>
  </nav>
  <!-- slide -->
<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slide2.jpg" alt="Book" width="460" height="345">
      </div>
      <div class="item">
        <img src="images/slide3.jpg" alt="example" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <br>
  <!-- el cuerpo de la pagina -->
  <div class="container">
    <div class="jumbotron">
        <div class="page-header">
          <h2>¿Que es Schoolsys?</h2>
        </div>
      <p>
        Schoolsys es un sistema que facilita la administracion de datos escolares bajo
        tecnologias Web, orientado principalmente a escuelas basicas y medias.
      </p>
    </div>
  </div>
  <!-- modal de login -->
    <div class="modal fade" id="Modalogin" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Entrar</h4>
          </div>
          <div class="modal-body">
             <form action="conexiones/vlogin.php" method="post" role="form">
                <div class="form-group">
                  <label for="rut">Rut:</label>
                  <input type="text" class="form-control" placeholder="11111111-1" name="rut">
                </div>
                <div class="form-group">
                  <label for="passwd">Contraseña:</label>
                  <input type="password" class="form-control" name="passwd">
                </div>
                <div id="nologin">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="btn-enviar">Entrar</button>
            </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>   
      </div>
    </div>
    <!-- modal de como registrar -->
    <div class="modal fade" id="ModalReg" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Como entrar</h4>
          </div>
          <div class="modal-body">
            <p>Para conseguir una contraseña, consulte con el administrador encargado de su institucion.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>   
      </div>
    </div>
<!--pie-->
  <div>
    <footer class="footer col-sm-2">
      <div class="container">
      <p class="text-muted">Alejandro Chacon !© 2016  <a href="mailto:a.chacon01@ufromail.cl">Contactar</a></p>
      </div>
    </footer>
  </div>
</body>
</html>