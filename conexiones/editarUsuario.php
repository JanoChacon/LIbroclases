<?php
include('connection.php');

$db=conectar();

extract($_POST);

  $rut = mysqli_real_escape_string($db,$_POST['inrut']);
  $passwd = mysqli_real_escape_string($db,$_POST['inpass']);
  $priv = $_POST['inpriv'];
  
  switch ($priv) {
    case "Alumno":
        $tipo =0;
        break;
    case "Profesor":
        $tipo =1;
        break;
    case "Administrador":
        $tipo =2;
        break;
}
  		
$sql = "UPDATE Usuario SET `tipoUsuario`= '$tipo', `claveUsuario` = '$passwd' WHERE rutUsuario = '$rut';";

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}

$consulta = "SELECT * FROM Usuario";

if (!$result = $db->query($consulta)){
	printf("error en la consulta");
  }
  echo '<div id="Usuario">
	<div class="container">
	        <table class="table table-striped table-bordered">
	            <thead>
	                <tr>
	                    <th>Rut Usuario</th>
	                    <th>Privilegio</th>
	                    <th>Operaciones</th>
	                </tr>
	            </thead>
	            <tbody>';
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
                        <span class="glyphicon glyphicon-pencil"></span> Editar</a> 
                        <a href="javascript:eliminarUsuario(\''.$fila['rutUsuario'].'\');" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-remove-circle"></span> Borrar</a></td>
                    	</th>';
	                }

echo '			</tbody>
			</table>
	</div>
</div>';
?>
