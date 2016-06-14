<?php
session_start();
include('connection.php');

$db=conectar();
  $rut = mysqli_real_escape_string($db,$_POST['rut']);
	//para verificar sintaxis de sql sea compatible con string
	$passwd = mysqli_real_escape_string($db,$_POST['passwd']);

	//consulta en mysql
	$sql = "SELECT * FROM Usuario WHERE rut = '$rut' AND passwd = '$passwd'";

	if (!$result = $db->query($sql)){
    	printf("error en la consulta");
  }
   	//error si no devuelve(false)
    $row = $result->fetch_assoc();
    //datos de la base
    if ($rut==$row['rut'] and $passwd==$row['passwd'] and $rut!=''and $passwd!='') {
   		$_SESSION["rut"] = $row['rut'];
   		$_SESSION["passwd"] = $row['passwd'];
   		header('Location: menu.php');
   	}else{
   		//devuelve a login si los datos no concuerdan
      header('Location: index.php?login=0');
    }
    ?>