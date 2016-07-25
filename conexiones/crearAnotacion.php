<?php
include('connection.php');

$db=conectar();

extract($_POST);

  $id = 78778;
  $rutAl = mysqli_real_escape_string($db,$_POST['rutAl']);
  $rutProf = mysqli_real_escape_string($db,$_POST['rutProf']);
  $Anotacion = mysqli_real_escape_string($db,$_POST['anot']);
  $fecha = mysqli_real_escape_string($db,$_POST['fecha']);

  		
$sql = "INSERT INTO `Anotaciones` (`idAnotacion`, `rutAlumno`, `rutProfesor`, `Anotacion`, `fechaAnot`) 
			VALUES ('$id', '$rutAl', '$rutProf', '$Anotacion', '$fecha');";

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
$db->close();

echo '<h3>Usuario nuevo ingresado</h3>';