<?php session_start();

require 'config.php';
require '../funciones.php';

//Este archivo se encarga de recopilar toda la información del formulario y enviarla
//A la base de datos


//Comprobamos que la sesión este iniciada con la función
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

//Comprobar si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//titulo es lo que estamos obteniendo de "nuevo.view.php"
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = $_POST['texto'];
	$thumb = $_FILES['thumb']['tmp_name'];

	//Va a almacenar la ruta del archivo cuando ya este finalizado
	$archivo_subido = "../" . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
	//la varuable $archivo_subido significa "../imagenes/1.png"

	//Con esta función movemos de lo que es la 
	//carpeta de la computadora del usuario donde esta la imagen a la del servidor
	move_uploaded_file($thumb, $archivo_subido);

	//Guardamos la información en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO articulos (id, titulo, extracto, texto, thumb)
		VALUES (null, :titulo, :extracto, :texto, :thumb)'
		);

	$statement->execute(array(
		':titulo' => $titulo,
		':extracto' => $extracto,
		':texto' => $texto,
		':thumb' => $_FILES['thumb']['name']
		));

	header('Location: ' . RUTA . '/admin');

}


require '../views/nuevo.view.php';




?>