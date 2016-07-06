<?php
session_start();
include('connection.php');

$db=conectar();
  $rut = mysqli_real_escape_string($db,$_POST['rut']);
	$passwd = mysqli_real_escape_string($db,$_POST['passwd']);

	$sql = "SELECT * FROM Usuario WHERE rutUsuario = '$rut' AND claveUsuario = '$passwd'";

	if (!$result = $db->query($sql)){
    	printf("error en la consulta");
  }
   	//error si no devuelve(false)
    $row = $result->fetch_assoc();
    //datos de la base
    if ($rut==$row['rutUsuario'] and $passwd==$row['claveUsuario'] and $rut!=''and $passwd!='') {
      $_SESSION["session"] = true;
   		$_SESSION["rut"] = $row['rutUsuario'];
   		$_SESSION["passwd"] = $row['claveUsuario'];
      $_SESSION["tipo"] = $row['tipoUsuario'];
   	}else{
      echo '<div class="alert alert-danger">Datos incorrectos, intente nuevamente</div>
            <script>window.location.href=\"\proyecto\index.php\"</script>';
    }
    ?>