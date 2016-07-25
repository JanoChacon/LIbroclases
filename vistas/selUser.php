<?php

include('../conexiones/vsession.php');
include("../conexiones/connection.php");

$db=conectar();

$consulta = "SELECT * FROM Usuario";

if (!$result = $db->query($consulta)){

    	printf("error en la consulta");
  }
?>
<div id="Usuario">
	<div class="container">
	        <table class="table table-striped table-bordered">
	            <thead>
	                <tr>
	                    <th>Rut Usuario</th>
	                    <th>Privilegio</th>
	                    <th>Operaciones</th>
	                </tr>
	            </thead>
	            <tbody>
	            <?php 
	                while($fila = $result->fetch_assoc()){
	                    echo '
	                    <tr>
	                    <td>'.$fila['rutUsuario'].'</td>
	                    <td>';
	                   switch ($fila['tipoUsuario']) {
						    case 0:
						        echo "Alumno";
						        break;
						    case 1:
						        echo "Profesor";
						        break;
						    case 2:
						        echo "Administrador";
						        break;
						}
        				echo '</td>
						<td><a href="javascript:editarUsuario(\''.$fila['rutUsuario'].'\');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span> Editar</a><a href="javascript:eliminarUsuario(\''.$fila['rutUsuario'].'\');" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-remove-circle"></span> Borrar</a></td>
                    	</th>';
	                }
	            ?>
				</tbody>
			</table>
	</div>
</div>