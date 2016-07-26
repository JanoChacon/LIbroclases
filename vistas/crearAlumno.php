<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();

    $sql = "SELECT * FROM Curso;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-crealumno").click(function(e){
      e.preventDefault();
      $.post("conexiones/creaAlumno.php", $("#alumno-form").serialize(), function(htmlext){
          $("#resultado").html(htmlext);
      });
    });
  });
</script>
<div class="container">
  <form class="form-horizontal" action="conexiones/creaAlumno.php" method="post" role="form" id="alumno-form">
      <div class="row">
          <div>
            <label class="control-label" for="rutAl">Rut Alumno:</label>
            <input type="text" class="form-control" name="rutAl" maxlength="10" placeholder="11111111-1">
          </div>
          <div>
            <label class="control-label" for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="los nombres">
          </div>
          <div>
            <label class="control-label" for="ap1">Apellido paterno:</label>
            <input type="text" class="form-control" name="ap1" placeholder="apellido">
          </div>
      </div>
      <div class="row">
          <div>
            <label class="control-label" for="ap2">Apellido materno:</label>
            <input type="text" class="form-control" name="ap2" placeholder="apellido">
          </div>   
          <div">
            <label lass="control-label" for="curso">Curso:</label>
            <select class="form-control" name="curso">
                <option value="" selected="selected"></option>
                <?php 
                while($fila = $resultado->fetch_assoc()){
                  echo '<option value='.$fila['idCurso'].'>'.$fila['idCurso'].'</option>';
                }?>
            </select>
          </div>
      </div>
      <br>         
        <input type="submit" value="Ingresar" class="btn btn-warning" id="btn-crealumno"/>
  </form>
</div>

<div id="resultado"></div>