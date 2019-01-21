<?php

session_start();
//Esta sesión se pierde en cuanto se cierra el navegador, pero existen las cookies que se guardan en la compu del usuario

$_SESSION['nombre'] = 'Ricardo';
$_SESSION['nombre'] = 'Sutano';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	<h1>Página de Inicio</h1>
	<p></p>
	<a href="pagina2.php">Ir a la página 2</a>
</body>
</html>