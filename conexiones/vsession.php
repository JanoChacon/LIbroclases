<?php
function vsession(){
	session_start();
	if ($_SESSION["session"] != true){
		header('Location: index.php');
	}
}
?>