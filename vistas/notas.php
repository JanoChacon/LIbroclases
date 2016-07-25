<?php
    include('../conexiones/vsession.php');
    include('../conexiones/connection.php');
    $db=conectar();

    $idAsig=$_POST["Asign"];
    $idcurso=$_POST["Curso"];
    $idsem=$_POST["Sem"];

    $sql = "SELECT * FROM Calificaciones INNER JOIN Alumno INNER JOIN Asignatura
            WHERE Calificaciones.rutAlumno = Alumno.rutAlumno 
            AND Calificaciones.idAsignatura = Asignatura.idAsignatura 
            AND Asignatura.idAsignatura = '$idAsig'
            AND Alumno.idCurso='$idcurso'
            AND Calificaciones.semestre='$idsem'
            ORDER BY Alumno.apAlumno1;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
?>

<div class="container">
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
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($fila = $resultado->fetch_assoc()){
                    echo '
                    <tr>
                    <td>'.$fila['rutAlumno'].' '.$fila['apAlumno1'].' '.$fila['nAlumno'].'</td>
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
                    <td><a href="javascript:buscarNotas(\''.$fila['rutAlumno'].'\',\''.$idAsig.'\','.$idsem.',\''.$idcurso.'\');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span></a>
                    </a></td>';
                }?>
<div id="resultado"></div>

