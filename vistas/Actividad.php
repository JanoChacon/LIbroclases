<?php
    include('../conexiones/vsession.php');
    session_start();
    include('../conexiones/connection.php');

    $db=conectar();

    $idAsig=$_POST["Asign"];
    $idcurso=$_POST["Curso"];
    $Actfecha=$_POST["Fecha"];
    $rutProfe=$_POST["rutProfe"];

    $sql = "SELECT * FROM Actividad INNER JOIN Asignatura WHERE Actividad.idAsignatura ='$idAsig'
    AND Actividad.FechaAct ='$Actfecha' AND Actividad.idCurso ='$idcurso'
    AND Actividad.idAsignatura=Asignatura.idAsignatura;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();

    while($fila = $resultado->fetch_assoc()){ 
        echo '
            <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Fecha: '.$fila['FechaAct'].' | Curso: '.$fila['idCurso'].' | Asignatura: '.$fila['nAsignatura'].'</th>
            </tr>
            </thead>
            <tr>
                <th><h5>'.$fila['Actividad'].'<br><br></h5></th>
            </tr>
            <tbody>';
            }
?>