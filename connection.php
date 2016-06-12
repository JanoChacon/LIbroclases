<?php
	function conectar(){
		//servidor, usuario, clave y la base de datos
		$db = new mysqli('localhost','root','pac-man2','Schoolsys');
		if($db->connect_errno > 0){
		    die('Imposible conectar ['.$db->connect_error.']');
		}
		return $db;
	}
?>