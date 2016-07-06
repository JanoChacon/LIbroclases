<?php
session_start();
include('connection.php');

$db=conectar();

extract($_POST);

  $rut = mysqli_real_escape_string($db,$_POST['rut']);
  $passwd = mysqli_real_escape_string($db,$_POST['passwd']);
  $priv = (int)mysqli_real_escape_string($db,$_POST['priv']);

$sql = "INSERT INTO Usuario VALUES ('$rut','$priv','$passwd','a','s','d','w','e')";

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}else{
    header('Location: /proyecto/administrar.php');
}

$db->close();