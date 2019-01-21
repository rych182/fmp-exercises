<?php
$errores = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];

	if (!empty($nombre)) {
		//$nombre = trim($nombre); //Quita los espacios al final y al inicio
		//$nombre = htmlspecialchars($nombre);//para que todos los caracteres raros se vuelvan html
		//$nombre = stripcslashes($nombre);// para que los \ no se puedan ingresar
		
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);//si meten código que no deben, te lo limpia
		echo "Tu nombre es: ". $nombre . "<br>";
	}else{
		$errores .= 'Por favor, agrega un nombre <br>';
	}

	if (!empty($correo)){
		$correo = filter_var($nombre, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { //Si no es válido el correo
			$errores .= 'Ingresa un correo '
		}else{
			echo "Tu correo es: ". $correo;	
		}
			
	}else{
		$errores .= 'Agrega un correo';
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="nombre">
		<input type="email" name="correo">
		<?php if (!empty($errores)):  ?>
		<div class="error"><?php echo $errores; ?></div>
		<?php endif; ?>
		<input type="submit" name="submit">
	</form>
</body>
</html>