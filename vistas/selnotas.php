<?php
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Asignatura;";
    $sql2 = "SELECT * FROM Alumno;";
    $sql3 = "SELECT * FROM Alumno;";
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado3 = $db->query($sql3)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
 ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Seleccinar Calificaciones</h3>
      <br>
      <form class="form-horizontal" method="post" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="Asign">Asignatura:</label>
          <div class="col-sm-10">
            <select name="Seleccione Asignatura" id="Asign" class="btn btn-default dropdown dropdown-toggle" name="Asign">
              <?php 
                while($fila = $resultado->fetch_assoc()){
                  echo '<option value='.$fila['idAsignatura'].'>'.$fila['nAsignatura'].'</option>';
                }
               ?>
            </select>
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Curso">Curso:</label>
          <div class="col-sm-10">
            <select name="Seleccione Curso" id="Curso" class="btn btn-default dropdown dropdown-toggle" name="Curso">
              <?php 
                while($fila2 = $resultado2->fetch_assoc()){
                  echo '<option value='.$fila2['Curso'].'>'.$fila2['Curso'].'</option>';
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Sem">Asignatura:</label>
          <div class="col-sm-10">
            <select name="Seleccione Semestre" id="sem" class="btn btn-default dropdown dropdown-toggle" name="sem">
             <option value="01">1° Semestre</option>
             <option value="02">2° Semestre</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-success" id="btn-vnotas">Buscar</button>
      </form>
</body>
