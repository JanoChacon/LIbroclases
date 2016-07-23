<?php
include('connection.php');
$db=conectar();

$rut = $_POST['rutAl'];
$idasign = $_POST['Asign'];
$sem = $_POST['Sem'];

//para obtener notas del alumno para el modal

$consulta = "SELECT * FROM Calificaciones WHERE rutAlumno = '$rut' 
			AND idAsignatura='$idasign'
			AND Semestre='$sem'";

if (!$result = $db->query($consulta)){
    	printf("error en la consulta");
  }

$valores = $result->fetch_assoc();

$datos = array(
				0 => $valores['Semestre'], 
				1 => $valores['Nota1'], 
				2 => $valores['Nota2'], 
				3 => $valores['Nota3'],
				4 => $valores['Nota4'],
				5 => $valores['Nota5'],
				6 => $valores['Nota6'],
				7 => $valores['Nota7'],
				8 => $valores['Nota8'],
				9 => $valores['Nota9'],
				10 => $valores['Nota10'],
				11 => $valores['idAsignatura'],
				);

echo json_encode($datos);
?>