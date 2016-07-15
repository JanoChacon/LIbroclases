<?php
    include('../conexiones/vsession.php');
    session_start();
    include('../conexiones/connection.php');
    $db=conectar();

    $idAsig=$_POST["Asign"];
    $idcurso=$_POST["Curso"];
    $Afecha=$_POST["Fecha"];

    $sql = "SELECT * FROM Asistencia INNER JOIN Alumno WHERE Asistencia.idAsignatura ='$idAsig'
    AND Asistencia.fechaAsist ='$Afecha' AND Asistencia.idCurso ='$idcurso'
    AND Asistencia.rutAlumno=Alumno.rutAlumno;";

    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
    
	echo '<div class="container">
    	<div>
        	<table class="table table-striped table-bordered">
            	<thead>
                	<tr>
                    	<th>Nombre</th>
                    	<th>Valor</th>
                	</tr>
            	</thead>
            	<tbody>';
                	while($fila = $resultado->fetch_assoc()){
                	echo '
                		<tr>
                		<td>'.$fila['rutAlumno'].' | '.$fila['apAlumno1'].' '.$fila['nAlumno'].'</td>
                		<td>'.$fila['Asistencia'].'</td>
                		</tr>';
                }
?>