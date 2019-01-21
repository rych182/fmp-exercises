<?php

require 'admin/config.php';
require 'funciones.php';

//Hacer una conexion a nuestra base de datos para traer nuestros artículos
$conexion = conexion($bd_config);
//comprobamos si hay conexión
if (!$conexion) {
	header('Location: error.php');
}

//guardar posts
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
//Si no hay posts
if (!$posts) {
	header('Location: error.php');
}

require 'views/index.view.php';

?>