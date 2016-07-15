<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();

    $rutAl=$_POST["rutAl"];

    $sql = "SELECT * FROM Alumno WHERE rutAlumno = '$rutAl';";
    $sql2 = "SELECT * FROM Anotaciones WHERE rutAlumno = '$rutAl';";
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
<body>
<div class="container">
    <br>
    <div>
        <?php
            while($fila = $resultado->fetch_assoc()){
                 echo '<h4>'.$fila['rutAlumno'].' | '.$fila['nAlumno'].' '.$fila['apAlumno1'].' '.$fila['apAlumno2'].'</h4>';
            }
            while($fila2 = $resultado2->fetch_assoc()){ 
                echo '
                <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Anotacion N° '.$fila2['idAnotacion'].' | Fecha: '.$fila2['fechaAnot'].'</th>
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
