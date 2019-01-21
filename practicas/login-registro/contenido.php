<?php
session_start();

//Comprobacion de sesion
if (isset($_SESSION['usuario'])) {
	require 'views/contenido.view.php';
}else{
	header('Location: login.php');
}



//Este archivo es para la lógica, comprueba que el usuario tenga una sesión
//Y si no, lo va a enviar a que inicie sesión o se registre

//Comentamos el require de abajo porque ya lo tenemos en la comprobación
//require 'views/contenido.view.php';


?>