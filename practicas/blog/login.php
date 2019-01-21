<?php session_start();
//Como se trabaja con sesiones ponemos session_start

require 'admin/config.php';
require 'funciones.php';

//comprobamos si los archivos ya se enviaron
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//quiere decir que ya se enviaron y los recibimos aquí
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);

	//verificamos si el usuario y contraseña son los mismos que en el archivo config.php
	if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
			//creamos la sesión
			$_SESSION['admin'] = $blog_admin['usuario'];
			header('Location:' . RUTA . '/admin');
		}


	}	

require 'views/login.view.php';

?>