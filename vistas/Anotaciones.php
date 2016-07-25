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
                        <th>Anotacion N° '.$fila2['idAnotacion'].' | Fecha: '.$fila2['fechaAnot'].'</th>
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
<div class="modal fade" id="edit-anot-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Crear Nueva Anotacion</h4>
            </div>
            <form class="form-horizontal" action="conexiones/crearAnotacion.php" method="post" role="form" id="anotcrea-form">
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
                <input type="submit" value="Editar" class="btn btn-warning" data-dismiss="modal" id="btn-anotacioncrear"/>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
        </div>
    </div>
</div>






