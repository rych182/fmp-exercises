<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet"> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Registrate</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">

		<!--Usamos php para redirigir ala misma página y htmlspecialchars para evitar que nos
		inyecten código -->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" class="usuario" name="usuario" placeholder="Usuario">	
			</div>	

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" class="usuario" name="password" placeholder="Constraseña">	
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" class="password_btn" name="password2" placeholder="Repetir contraseña">	
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<?php if (!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p class="texto-registrate">
			¿Ya tienes cuenta?
			<a href="login.php">Iniciar sesión</a>
		</p>
	</div>	
</body>
</html>