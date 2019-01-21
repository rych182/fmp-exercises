<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<!--Si la variable $enviado es false y la variable $nombre declarada, entonces muestra el nombre-->
			<!--Sirve para que no desaparezca lo que escribiste en dado caso que no llenes todos los datos del formulario-->
			<input type="text" class="form-control" name="nombre" placeholder="Nombre:" id="nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre;?>">
			<input type="email" class="form-control" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo;?>" id="correo">
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje;?></textarea>

		<!--
			<div class="alert error">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos totam mollitia neque architecto, esse porro expedita et nostrum dolorem nisi! Repellat dolor provident, accusamus recusandae nemo obcaecati quod quaerat facilis.</div>
			<div class="alert success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quas sequi voluptatem neque. Molestiae, beatae, ut. Voluptate praesentium quasi quos obcaecati libero odit exercitationem at quo, ab laboriosam fugit eius.</div>
		-->
		<?php if (!empty($errores)): //nos permite combinar la condicion php con codigo html
		//pregunta si la variable errores si esta vacía, si tiene algo dentro, quiere decir que si tiene errores que mostrar?>
			<div class="alert error">
				<?php echo $errores; ?>
			</div>
		<?php elseif ($enviado): //vamos a verificar ?>
			<div class="alert success">
				<p>Enviado correctamente</p>
			</div>			
		<?php endif ?>

			<input type="submit" value="Enviar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>