<?php
session_start();

if (isset($_SESSION['usuario'])) {
	//Si la sesión está declarada, podemos enviar al usuario al contenido
	header('Location:contenido.php');
}else{
	header('Location: registrate.php');
}


?>