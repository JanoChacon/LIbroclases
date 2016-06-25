<?php
//Reanudamos la sesión 
session_start(); 
//la destruimos 
session_destroy(); 
//Redireccionamos a index.php (al inicio de sesión) 
header("Location: index.php");
?>