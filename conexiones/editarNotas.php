<?php
session_start();
include('vsession.php');
include('connection.php');

$db=conectar();

$rut = $_POST['inrut'];
$idAsig = $_POST['inasign'];
$idsem = $_POST['insem'];
$idcurso = $_POST['incurso'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$n9 = $_POST['n9'];
$n10 = $_POST['n10'];

$update = "UPDATE Calificaciones SET ";
$where = " WHERE rutAlumno = '$rut'
			AND idAsignatura = '$idAsig'
			AND Semestre= '$idsem';";

if (!empty($n1)){
	if(! $db->query("{$update}Nota1=$n1{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n2)){
	if(! $db->query("{$update}Nota2=$n2{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n3)){
	if(! $db->query("{$update}Nota3=$n3{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n4)){
	if(! $db->query("{$update}Nota4=$n4{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n5)){
	if(! $db->query("{$update}Nota5=$n5{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n6)){
	if(! $db->query("{$update}Nota6=$n6{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n7)){
	if(! $db->query("{$update}Nota7=$n7{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n8)){
	if(! $db->query("{$update}Nota8=$n8{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n9)){
	if(! $db->query("{$update}Nota9=$n9{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}
if (!empty($n10)){
	if(! $db->query("{$update}Nota10=$n10{$where}")){
    	die('Ocurrio un error ejecutando el query [' . $db->error . ']');
	}
}

$sql2 = "SELECT * FROM Calificaciones INNER JOIN Alumno INNER JOIN Asignatura
            WHERE Calificaciones.rutAlumno = Alumno.rutAlumno 
            AND Calificaciones.idAsignatura = Asignatura.idAsignatura 
            AND Asignatura.idAsignatura = '$idAsig'
            AND Alumno.idCurso='$idcurso'
            AND Calificaciones.semestre='$idsem'
            ORDER BY Alumno.apAlumno1;";

    if(!$resultado = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }else{
    	echo '<div class="container">
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
            <tbody>';
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
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a></td>';
                }
    }
?>



