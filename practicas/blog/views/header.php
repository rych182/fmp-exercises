<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA;?>/css/estilos.css">
	<!--Se le puso RUTA porque todo esta parte del header lo vamos a copiar a otro
	archivo y la vamos a ir pegando en cada uno de los diferentes archivos-->
	<title>Blog</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>
			</div>

			<div class="derecha">
				<!--Esto se hace porque los datos que tengamos del formulario
				los tenemos que recibir en buscar.php para poder trabajarlos-->
				<form name="busqueda" class="buscar" action="<?php echo RUTA;?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>

				<nav class="menu">
					<ul>
						<li><a href="https://twitter.com/Rych182"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/rych182/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>