<?php
    session_start();
    include('../conexiones/connection.php');
    $db=conectar();

    $idAsignatura = mysqli_real_escape_string($db,$_POST['Asign']);
    $Curso = mysqli_real_escape_string($db,$_POST['Curso']);
    
    echo $idAsignatura;

    $sql = "SELECT * FROM Calificaciones INNER JOIN Alumno INNER JOIN Asignatura
            WHERE Calificaciones.rutAlumno = Alumno.rutAlumno 
            AND Calificaciones.idAsignatura = Asignatura.idAsignatura 
            AND Asignatura.idAsignatura = '$idAsignatura';";
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota 4</th>
                    <th>Nota 5</th>
                    <th>Nota 6</th>
                    <th>Nota 7</th>
                    <th>Nota 8</th>
                    <th>Nota 9</th>
                    <th>Nota 10</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila = $resultado->fetch_assoc()){
                echo '
                <tr>
                <td>'.$fila['rutAlumno'].' '.$fila['nAlumno'].' '.$fila['apAlumno1'].'</td>
                <td>'.$fila['Nota1'].'</td>
                <td>'.$fila['Nota2'].'</td>
                <td>'.$fila['Nota3'].'</td>
                <td>'.$fila['Nota4'].'</td>
                <td>'.$fila['Nota5'].'</td>
                <td>'.$fila['Nota6'].'</td>
                <td>'.$fila['Nota7'].'</td>
                <td>'.$fila['Nota8'].'</td>
                <td>'.$fila['Nota9'].'</td>
                <td>'.$fila['Nota10'].'</td>
                <td></td>
                ';
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>