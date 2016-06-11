<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<!-- responsibe bootstrap y scripts jQuery/bstrap -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body background="images/fondo-azul.jpg">
  <!-- la navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">El nombre</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a type="button" class="btn" data-toggle="modal" data-target="#ModalReg">
            <span class="glyphicon glyphicon-user"></span> Registrate</a>
          </li>
        </ul>
    </div>
  </nav>
  <!-- el cuerpo de la pagina -->
  	<div class="container-fluid">
   		<div class="row">
        <!-- barra navegacion vertical -->
  			<div class="col-sm-3">
  				<ul class="nav nav-pills nav-stacked">
				    <li class="active"><a href="#">Home</a></li>
				    <li><a href="#">Menu 1</a></li>
				    <li><a href="#">Menu 2</a></li>
				    <li><a href="#">Menu 3</a></li>
  				</ul>
			</div>
        <!-- cuerpo -->
  			<div class="col-sm-9">
  				<div class="jumbotron">
				    <h1>hola</h1>
				      <p>
				        Este es un parrafo de prueba, Se le llama base de datos a los bancos de información que contienen datos relativos a diversas temáticas y categorizados de distinta manera, pero que comparten entre sí algún tipo de vínculo o relación que busca ordenarlos y clasificarlos en conjunto.

				        Una base de datos o banco de datos es un conjunto de datos pertenecientes a un mismo contexto y almacenados sistemáticamente para su posterior uso. En este sentido; una biblioteca puede considerarse una base de datos compuesta en su mayoría por documentos y textos impresos en papel e indexados para su consulta. Actualmente, y debido al desarrollo tecnológico de campos como la informática y la electrónica, la mayoría de las bases de datos están en formato digital, siendo este un componente electrónico, por tanto se ha desarrollado y se ofrece un amplio rango de soluciones al problema del almacenamiento de datos.

				        Existen programas denominados sistemas gestores de bases de datos, abreviado SGBD (del inglés Database Management System o DBMS), que permiten almacenar y posteriormente acceder a los datos de forma rápida y estructurada. Las propiedades de estos DBMS, así como su utilización y administración, se estudian dentro del ámbito de la informática.

				        Las aplicaciones más usuales son para la gestión de empresas e instituciones públicas; También son ampliamente utilizadas en entornos científicos con el objeto de almacenar la información experimental.
				      </p>
    			</div>
			</div>
		</div>
 	</div>
</body>
</html>