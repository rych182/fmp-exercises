<?php

require 'admin/config.php';
require 'funciones.php';

//conectarnos a la base de datos
$conexion = conexion($bd_config);
//Obtener el id del artículo, lo vamos a castear
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}

if (empty($id_articulo)) {
	header('Location: index.php');
}

$post = obtener_post_por_id($conexion,$id_articulo);

if (!$post){
	header('Location: index.php');
}

//Esto es por que el post es un arreglo dentro de otro arreglo, puedes comprobarlo
//utilizando print_r($post);
$post = $post[0];

//si presionamis un post, nos cargue ese post


require 'views/single.view.php';

?>