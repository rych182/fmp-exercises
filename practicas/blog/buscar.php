<?php

require 'admin/config.php';
require 'funciones.php';

//Necesitamos conectarnos a la base de datos
$conexion = conexion($bd_config);
//comprobamos si hay conexión
if (!$conexion) {
	header('Location: error.php');
}

//Primer paso, recibir los datos
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
	//Buscar desde la base de datos
	//Use la funcion "limpiarDatos" para que el usuario no vaya a intentar inyectarnos datos
	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement = $conexion->prepare(
		'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
	);
	//Los porcentajes sirven para que busque dentro de todos los artículos
	$statement->execute(array(':busqueda' => "%$busqueda%"));
	//Mostramos todos los datos
	$resultados = $statement->fetchAll();

	//Comprobamos los resultados
	if (empty($resultados)) {
		$titulo = 'No se encontro la busqueda ' . $busqueda;
	}else{
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
	}
}else{
	header('Location: ' . RUTA . '/index.php');
}

require 'views/buscar.view.php';
?>