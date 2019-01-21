<?php
session_start();
//Haciendo una comprobación
//Si la variable  $_SESSION existe
if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola, $nombre ";
}else{
	echo "No has iniciado sesion";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
</head>
<body>
	<a href="cerrar.php">Cerrar sesion</a>
</body>
</html>