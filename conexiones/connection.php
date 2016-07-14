<?php
//conexion a la base de datos, (discrecion con la passs)
	function conectar(){
		$db = new mysqli('localhost','root','laclave','SchoolSys');
		if($db->connect_errno > 0){
		    die('Imposible conectar ['.$db->connect_error.']');
		}
		return $db;
	}

?>
