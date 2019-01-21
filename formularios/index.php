<?php

if ($_POST) {
	echo $_POST['nombre'] . ' es ' . $_POST['sexo'];
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<!--Para imprimir en la misma página index.php -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>
		
		<!--Al tener el mismo valor en "vale" y "for" al darle click a
		la etiqueta, podrás seleccionar el radio-->
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<br>
		
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>

		<!--El texto es lo que se muestra pero el value es lo que se envía-->
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>

		<label for="terminos">¿Aceptas los terminos y condiciones?</label>
		<!--Significa que el usuario acepto los terminos-->
		<input type="checkbox" name="terminos" id="terminos" vale="ok">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>