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
    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn-activ-crear").click(function(e){
          e.preventDefault();
          $.post("conexiones/creaActividad.php", $("#crea-acti-form").serialize(), function(htmlext){
              $("#resultadoActividad").html(htmlext);
          });
        });
      $("#btn-buscaactmenu").click(function(){
          $.get("vistas/selActiv.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
      });
      });
    </script>

<form class="form-horizontal" action="conexiones/creaActividad.php" method="post" role="form" id="crea-acti-form">
    <div class="row">
        <div class="col-sm-4">
          <label class="control-label" for="rutProf">Rut Profesor:</label>
          <input type="text" class="form-control" name="rutProf" placeholder="11111111-1">
        </div>
        <div class="col-sm-4">
            <label for="asign">Asingnatura:</label>
             <select class="form-control" name="asign">
                <option value="" selected="selected"></option>
                <?php 
                while($fila = $resultado->fetch_assoc()){
                  echo '<option value='.$fila['idAsignatura'].'>'.$fila['nAsignatura'].'</option>';
                }?>
            </select>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-4">
            <label for="curso">Curso:</label>
            <select class="form-control" name="curso">
                <option value="" selected="selected"></option>
                <?php 
                while($fila2 = $resultado2->fetch_assoc()){
                  echo '<option value='.$fila2['idCurso'].'>'.$fila2['idCurso'].'</option>';
                }?>
            </select>
        </div>
        <div class="col-sm-4">
          <label class="control-label" for="fecha">Fecha:</label>
          <input type="text" class="form-control" name="fecha" placeholder="aaaa-mm-dd">
        </div>
    </div>
    <div class="row">
      <br>
        <div class="col-sm-12">
          <label class="control-label" for="activ">Actividad Realizada:</label>
           <textarea input type="text" class="form-control" name="activ" placeholder="Actividad..."></textarea>
        </div>
    </div>
    <br>             
    <input type="submit" value="Editar" class="btn btn-warning" id="btn-activ-crear"/>
</form>
<div id="resultadoActividad"></div>