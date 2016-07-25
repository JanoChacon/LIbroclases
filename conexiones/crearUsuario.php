<?php
include('connection.php');

$db=conectar();

extract($_POST);

  $rut = mysqli_real_escape_string($db,$_POST['rut']);
  $passwd = mysqli_real_escape_string($db,$_POST['passwd']);
  $priv = $_POST['priv'];
  		
$sql = "INSERT INTO `Usuario` (`rutUsuario`, `tipoUsuario`, `claveUsuario`) VALUES ('$rut', '$priv', '$passwd')";

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
$db->close();

echo '<h3>Usuario nuevo ingresado</h3>';