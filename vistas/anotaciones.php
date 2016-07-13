<?php 
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Alumno WHERE rutAlumno = '18774787-2';";
    $sql2 = "SELECT * FROM Anotaciones WHERE rutAlumno = '18774787-2';";
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Hoja de vida</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h3>Hoja de vida</h3>
    <br>
    <div>
        <?php
            while($fila = $resultado->fetch_assoc()){
                 echo '<h4>'.$fila['rutAlumno'].' '.$fila['nAlumno'].' '.$fila['apAlumno1'].' '.$fila['apAlumno2'].'</h4>';
            }
            while($fila2 = $resultado2->fetch_assoc()){ 
                echo '
                <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Anotacion N° '.$fila2['idAnotacion'].'</th>
                </tr>
                </thead>
                <tr>
                    <th><h5>'.$fila2['Anotacion'].'<br><br></h5></th>
                </tr>
                <tbody>';
            }
         ?>
    </div>
</div>
</body>
</html>