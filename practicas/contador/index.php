<?php

function contar_usuarios(){
	$archivo = 'contador.txt';
	if (file_exists($archivo)) {
		//si existe el archivo tomamos la cuenta
		//file_get_contents para ver el valor que tenemos dentro del archivo
		//El 1 es para que se le sume 1 al valor que viene dentro del archivo
		$cuenta = file_get_contents($archivo) + 1;
		//sirve para guardar el nuevo valor dentro del archivo, osea se sobreescribe
		file_put_contents($archivo, $cuenta);
		//devuelve el nuevo valor
		return $cuenta;
	}else{//file_put_contents: Si el archivo no existe crea un nuevo archivo
		file_put_contents($archivo, 1);
		return 1;
	}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contador de visitas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<h1>Contador de visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo contar_usuarios(); ?></p>
		<p class="texto">Visitas</p>
	</div>
</body>
</html>