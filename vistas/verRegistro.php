<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");

    $db=conectar();

    
    $sql = "SELECT * FROM Registro ORDER BY fechaRegistro;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();

   while($fila = $resultado->fetch_assoc()){ 
        echo '
            <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Fecha: '.$fila['fechaRegistro'].' | Por Usuario: '.$fila['rutUsuario'].'</th>
            </tr>
            </thead>
            <tr>
                <th><h5>'.$fila['Registrocol'].'<br><br></h5></th>
            </tr>
            <tbody>';
    }
 ?>