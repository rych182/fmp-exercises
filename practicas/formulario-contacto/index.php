<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {//Comprobando si el formulario ha enviado datos, aunque sea 1
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {//Si tiene contenido la variable nombre, al agregarle ! quiere decir que haremos lo contrario
		$nombre = trim($nombre);//trim: Quita los espacios al inicio y al final
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //filter_var saneara la información, verifica que haya escrito bien un nombre	
	}else{
		$errores.= 'Por favor ingresa un nombre <br>';
	}

	if (!empty($correo)) {//Queremos comprobar que tenga algo
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) { //Solo regresa false en dado caso que sea incorrecto,si es verdadero, regresa el correo
			$errorres .= 'Por favor ingresa un correo válido <br>';
			
		}
	}else{//si no puso un correo
		$errores .= 'Por favor, ingresa un correo<br>';

	}

	if (!empty($mensaje)) {//Queremos saber si el usuario escribió un mensaje
		//De esta manera el usuario ya no puede inyectar código
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	}else{
		$errores .= "Por fafovr ingresa el mensaje <br>";
	}

	if (!$errores) {
		$enviar_a = 'tunombre@tuempresa.com';//el correo a donde te van a enviar toda la información
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje_preparado = "De: $nombre \n";
		$mensaje .= "Correo: $correo \n";
		$mensaje .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado); comente esta linea para que no me marque error en localhost
		$enviado = true;
	}

}

require 'index.view.php';

?>