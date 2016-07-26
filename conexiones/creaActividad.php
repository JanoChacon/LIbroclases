<?php
include('connection.php');
include('vsession.php');
$db=conectar();

extract($_POST);

	$rutProf = mysqli_real_escape_string($db,$_POST['rutProf']);
	$idcurso = mysqli_real_escape_string($db,$_POST['curso']);
	$activ= mysqli_real_escape_string($db,$_POST['activ']);
	$fecha = mysqli_real_escape_string($db,$_POST['fecha']);
	$idasign = mysqli_real_escape_string($db,$_POST['asign']);

  		
$sql = "INSERT INTO `Actividad` (`FechaAct`, `idAsignatura`, `rutProfesor`, `idCurso`, `Actividad`) 
					VALUES ('$fecha', '$idasign', '$rutProf', '$idcurso', '$activ');";

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}

$rutUsuario=$_SESSION["rut"];
 if(! $db->query("INSERT INTO `Registro` (`idRegistro`, `Registrocol`, `fechaRegistro`, `rutUsuario`) VALUES (NULL, 'Actividad Añadida por: {$rutProf}', CURRENT_TIMESTAMP, '$rutUsuario');")){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}

$db->close();

echo 'actividad ingresada';