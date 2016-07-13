<?php
//Reanudamos la sesión 
session_start(); 
//la destruimos 
session_destroy(); 
//Redireccionamos a index.php
header("Location: /proyecto/index.php");
?>