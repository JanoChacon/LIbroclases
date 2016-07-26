<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();

    $rutAl=$_POST["rutAl"];

    $sql = "SELECT * FROM Alumno WHERE rutAlumno = '$rutAl';";
    $sql2 = "SELECT * FROM Anotaciones WHERE rutAlumno = '$rutAl';";
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
 <br>

 <script type="text/javascript">
  $(document).ready(function(){
    $("#btn-anotacioncrear").click(function(e){
      e.preventDefault();
      $.post("conexiones/crearAnotacion.php", $("#anotcrea-form").serialize(), function(htmlext){
          $("#anotaciones").html(htmlext);
      });
    });
  });
</script>

<div class="container">
    <br>
    <div>
        <?php
            while($fila = $resultado->fetch_assoc()){
                 echo '<div class="col-xs-10">
                            <h4>'.$fila['rutAlumno'].' | '.$fila['nAlumno'].' '.$fila['apAlumno1'].' '.$fila['apAlumno2'].'</h4>
                        </div>
                        <div class="col-xs-2">
                            <a href="javascript:modalAnotacion(\''.$fila['rutAlumno'].'\');" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-pencil"></span>Agregar Anotacion </a>
                        </div>' ;
            }
            while($fila2 = $resultado2->fetch_assoc()){
                    echo '
                    <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ingresada por: '.$fila2['rutProfesor'].' | Fecha: '.$fila2['fechaAnot'].'</th>
                    </tr>
                    </thead>
                    <tr>
                        <th><h5>'.$fila2['Anotacion'].'<br><br></h5></th>
                    </tr>
                    <tbody>';
            }
         ?>
    </div>
</div>








