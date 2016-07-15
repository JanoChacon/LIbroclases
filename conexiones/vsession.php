<?php
//para comprobar que inicio session
session_start();
if ($_SESSION["session"] != true){
	header('Location: index.php');
	exit();
}elseif ($_SESSION["tipo"] !=2 and $_GET['vadmin']==true) {
	header('Location: menu.php');
}

?>