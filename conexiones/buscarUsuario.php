<?php
include('connection.php');
$db=conectar();

$rutUser = $_POST['rutUser'];

//para obtener notas del usuario para el modal

$consulta = "SELECT * FROM Usuario WHERE rutUsuario='$rutUser'";

if (!$result = $db->query($consulta)){
    	printf("error en la consulta");
  }

$valores = $result->fetch_assoc();

$datos = array(
				0 => $valores['rutUsuario'], 
				1 => $valores['claveUsuario'], 
				2 => $valores['tipoUsuario'], 
				);

echo json_encode($datos);
?>