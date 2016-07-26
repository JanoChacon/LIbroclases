<?php
include('vsession.php');
include('connection.php');

$db=conectar();

extract($_POST);

$rut = $_POST['rutAl'];
$curso = $_POST['curso'];
$nombre = $_POST['nombre'];
$ap1 = $_POST['ap1'];
$ap2 = $_POST['ap2'];
  		
$sql = "INSERT INTO `Alumno` (`rutAlumno`, `idCurso`, `nAlumno`, `apAlumno1`, `apAlumno2`) 
				VALUES ('$rut', '$curso', '$nombre', '$ap1', '$ap2');";

if(!$db->query($sql)){
     die('Ocurrio un error ejecutando el query insert[' . $db->error . ']');
}

$rutUsuario=$_SESSION["rut"];

 if(! $db->query("INSERT INTO `Registro` (`idRegistro`, `Registrocol`, `fechaRegistro`, `rutUsuario`) VALUES (NULL, 'Alumno ingresado: {$rut}', CURRENT_TIMESTAMP, '$rutUsuario');")){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}


$sql2= "SELECT * FROM Asignatura;";

if(!$resultado = $db->query($sql2)){
    die('Ocurrio un error ejecutando el query slect[' . $db->error . ']');
}

while($fila = $resultado->fetch_assoc()){

	$Asignatura= $fila['idAsignatura'];

	if(!$db->query("INSERT INTO `Calificaciones` (`rutAlumno`, `idAsignatura`, `Semestre`) VALUES ('$rut', '$Asignatura', '1');")){
    		die('Ocurrio un error ejecutando el query 1[' . $db->error . ']');
	}
	if(!$db->query("INSERT INTO `Calificaciones` (`rutAlumno`, `idAsignatura`, `Semestre`) VALUES ('$rut', '$Asignatura', '2');")){
    		die('Ocurrio un error ejecutando el query 2[' . $db->error . ']');
	}
}

$db->close();
?>
<h3>Alumno nuevo ingresado</h3>
