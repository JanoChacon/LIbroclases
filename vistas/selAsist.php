<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Asignatura;";
    $sql2 = "SELECT * FROM Curso;";
    //estoy seguro que hay una forma mas estilizada y eficiente, pero me funciona por ahora
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<!--envio de datos por post sin recargar pagina
  evita que el evento default del boton submit, luego serializa los datos del formulario, y los envia a notas.php, ultimo carga la informacion de notas.php en el div señalado
-->
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-vasist").click(function(e){
      e.preventDefault();
      $.post("vistas/Asistencia.php", $("#asist-form").serialize(), function(htmlext){
          $("#asist").html(htmlext);
      });
    });
  });
</script>
<body>
<h3>Asistencia</h3>
      <br>
    <form action="vistas/Asistencia.php" method="post" role="form" id="asist-form">
    	<div class="form-group">
      		<div class="col-xs-2">
        		<label for="Curso">Curso:</label>
        		<select class="form-control" name="Curso">
                	<option value="" selected="selected"></option>
                	<?php 
                		while($fila2 = $resultado2->fetch_assoc()){
                  		echo '<option value='.$fila2['idCurso'].'>'.$fila2['idCurso'].'</option>';
                	}?>
            		</select>
	      	</div>
	      	<div class="col-xs-3">
		        <label for="Asign">Asignatura:</label>
             	<select class="form-control" name="Asign">
                	<option value="" selected="selected"></option>
                	<?php 
                	while($fila = $resultado->fetch_assoc()){
                  		echo '<option value='.$fila['idAsignatura'].'>'.$fila['nAsignatura'].'</option>';
                	}?>
            	</select>
      		</div>
	      	<div class="col-xs-4">
	        	<label class="control-label" for="Fecha">Fecha:</label>
                <input type="text" placeholder="aa-mm-dd" class="form-control" name="Fecha">
	      	</div>
	      	<div class="col-xs-2">
	      		<br>
	        	<button type="submit" class="btn btn-success" id="btn-vasist">Mostrar</button>
	      	</div>
   		</div>
  	</form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="asist">
    </div>
</body>
