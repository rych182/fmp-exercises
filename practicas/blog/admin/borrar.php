<?php session_start();

require 'config.php';
require '../funciones.php';



//Comprobamos que la sesión este iniciada con la función
comprobarSession();//Si no hay una sesión, nos va a redirigir

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

//borrar el id de la base de datos
$id = limpiarDatos($_GET['id']);
//comprobar que el id exista
if (!$id) {
	header('Location: ' . RUTA . '/admin');
}

$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/admin');


?>