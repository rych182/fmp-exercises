<?php
session_start();



//Para cerrar la sesión
session_destroy();
//Para limpiar la sesión, la dejamos en 0
$_SESSION = array();

//Para redirigir
header('Location: login.php');

?>