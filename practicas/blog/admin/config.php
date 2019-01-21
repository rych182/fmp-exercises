<?php
//Aquí guardamos la configuración de nuestro sitio
//Como por ejemplo cuantos artículos quieres cargar, el usuario y pass del login
//Este archivo se utiliza casi siempre, lo vamos a llamar en todos los archivos
//para acceder a alguno de los datos

//Lo ponemos para tener la ruta siempre disponible y enviar los archivos a la ruta principal
define('RUTA','http://localhost/fmp-php/practicas/blog');

//Arreglo en el cual vamos a guardar info relacionada con la bd como, usuario y pass
//y la bd obviamente 
$bd_config = array(
	'basedatos' => 'blog_practica',
	'usuario' => 'root',
	'pass' => ''
	);


//Configuración del blog
$blog_config = array(
	'post_por_pagina' => '2',
	'carpeta_imagenes' => 'imagenes/'
);

//Guardamo los datos del administrador
$blog_admin = array(
	'usuario' => 'Carlos',
	'password' => '123'
);
?>