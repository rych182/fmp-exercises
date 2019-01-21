<?php session_start();

require 'config.php';
require '../funciones.php';



//Comprobamos que la sesión este iniciada con la función
comprobarSession();//Si no hay una sesión, nos va a redirigir

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

//pregunta si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//Comprobar que el usuario al presionar el boton guarde los datos
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = $_POST['texto'];
	$id = limpiarDatos($_POST['id']);
	$thumb_guardada = ['thumb_guardada'];
	//Si no subimos nada el programa usa la imagen que ya estaba
	$thumb = $_FILES['thumb'];	

	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada; //la imagen es igual a la imagen que ya teníamos guardada
	}else{
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
		move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
		$thumb = $_FILES['thumb']['name'];
	}
	//subiendo los datos a la base de datos
	$statement = $conexion->prepare(//SET declarar
		'UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id'
		);

	$statement->execute(array(
			':titulo' => $titulo,
			':extracto' => $extracto,
			':texto' => $texto,
			':thumb' => $thumb,
			':id' => $id,
		));

	header('Location: ' . RUTA . '/admin');
}else{
	//la funcion id_articulo() obtiene el id de la pagina y lo limpia
	$id_articulo = id_articulo($_GET['id']);//consigue el id de la url del navegador
	if (empty($id_articulo)) {
		//si el usuario pone cualquier cosa que no sea un número en la url donde va la id, le redirigira a /admin
		header('Location: ' . RUTA . '/admin');
	}

	$post = obtener_post_por_id($conexion, $id_articulo);

	if (!$post) {
		header('Location: ' . RUTA . '/admin');
	}

	//Ponemos $post[0] porque así te muestra todo el artículo, y $post, es un array dentro de un array, puedes comprobarlo imprimiendo print_r($post[0]);
	$post = $post[0];
}



require '../views/editar.view.php';

?>