<?php
//ARCHIVO INDEX DEL ADMIN

//Se agrega un session_start() porque se va a trabajar con sesiones
session_start();

require 'config.php';
require '../funciones.php';

//Vamos a crear una conexión nueva
$conexion = conexion($bd_config);

//comprobar sesión
comprobarSession();


//Comprobar conexion
if (!$conexion) {
	header('Location: ../error.php');
}

//traaer nuestros post
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



require '../views/admin_index.view.php';


?>