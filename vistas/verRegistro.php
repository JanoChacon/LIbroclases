<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");

    $db=conectar();

    $sql = "SELECT * FROM REGISTRO ORDER BY fechaRegistro;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>