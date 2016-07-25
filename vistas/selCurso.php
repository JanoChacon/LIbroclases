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
    $("#btn-vcurso").click(function(e){
      e.preventDefault();
      $.post("vistas/curso.php", $("#curso-form").serialize(), function(htmlext){
          $("#resultado-curso").html(htmlext);
      });
    });
  });
</script>
<div id="anotaciones">
  <br>
  <br>
  <form action="vistas/curso.php" method="post" role="form" id="curso-form">
        <div class="form-group">
            <div class="col-xs-2">
              <label for="curso">Curso:</label>
              <select class="form-control" name="curso">
                    <option value="" selected="selected"></option>
                    <?php 
                      while($fila = $resultado->fetch_assoc()){
                        echo '<option value='.$fila['idCurso'].'>'.$fila['idCurso'].'</option>';
                    }?>
                  </select>
            </div>
            <div class="col-xs-2">
              <br>
              <button type="submit" class="btn btn-success" id="btn-vcurso">Mostrar</button>
            </div>
        </div>
  </form>
  <br>
  <br>
  <div id="resultado-curso"></div>
  <br>
  <br>
  <br>
</div>
