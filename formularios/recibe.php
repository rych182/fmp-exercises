<?php

// print_r(_POST);

//Si no hay $_POST , ejecuta todo lo que hay en el IF
if (!$_POST) {
	header('Location: http://localhost/fmp-php/formularios/index.php');
}
	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$year = $_POST['year'];
	$terminos = $_POST['terminos'];

	echo htmlspecialchars($nombre . " eres " . $sexo);//transforma lo que ingresen en la url
	//en entidades html


?>
