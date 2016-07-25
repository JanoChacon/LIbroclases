<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Alumno
    		ORDER BY idCurso;";
    //estoy seguro que hay una forma mas estilizada y eficiente, pero me funciona por ahora
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
<div id="anotaciones">
	<div class="container">
		<div>
			
		</div>
	        <table class="table table-striped table-bordered">
	            <thead>
	                <tr>
	                    <th>Alumno</th>
	                    <th>Curso</th>
	                    <th>Hoja de vida</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php 
	                while($fila = $resultado->fetch_assoc()){
	                    echo '
	                    <tr>
	                    <td>'.$fila['rutAlumno'].' '.$fila['apAlumno1'].' '.$fila['apAlumno2'].' '.$fila['nAlumno'].'</td>
	                    <td>'.$fila['idCurso'].'</td>
	                    <td><a href="javascript:verHoja(\''.$fila['rutAlumno'].'\');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-education"></span>
                    </a></td>
	                    </th>';
	                }?>
				</tbody>
			</table>
	</div>
</div>