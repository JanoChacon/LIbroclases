<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Alumno;";
    //estoy seguro que hay una forma mas estilizada y eficiente, pero me funciona por ahora
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<!--envio de datos por post sin recargar pagina
  evita que el evento default del boton submit, luego serializa los datos del formulario, y los envia a notas.php, ultimo carga la informacion de anotaciones.php en el div señalado
-->
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-anot").click(function(e){
      e.preventDefault();
      $.post("vistas/Anotaciones.php", $("#anot-form").serialize(), function(htmlext){
          $("#anotaciones").html(htmlext);
      });
    });
  });
</script>
<body>
<h3>Hoja de vida</h3>
      <br>
      <h4>busqueda de Registros</h4>
     <form action="vistas/anotaciones.php" method="post" role="form" id="anot-form">
        <div class="form-group">
          <div class="col-xs-4">
            <label class="control-label" for="rutAl">por rut de Alumno:</label>
                <input type="text" placeholder="11111111-1" class="form-control" name="rutAl">
          </div>
        </div>
          <div class="col-xs-2">
            <br>
            <button type="submit" class="btn btn-success" id="btn-anot">Mostrar</button>
          </div>
      </form>
        <br>
        <br>
        <br>
        <br>
    <div id="anotaciones">
    </div>
</body>
