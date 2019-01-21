<?php

function conexion($bd_config)
{
//Función para conectarnos a la base de datos
//La conexion se va a estar repitiendo en todos lados del sitio web
	try {//Si cambiamos el archivo de config, se cambian los datos
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}	
}
//Esta linea que ejecuta la conexión a la base de datos es la que usare todo el tiempo
//conexion($bd_config);

//función para limpiar los datos
function limpiarDatos($datos){
	$datos = trim($datos);//trim limpia los espacios en blanco al principio y final
	$datos = stripcslashes($datos);//sirve para que no te inyecten codigo osea caracteres
	$datos = htmlspecialchars($datos);//nos permite convertir el código en entidades especiales, por ejemplo < es &lt , ejemplo:
	return $datos;
}
//la 'p' es la de la url que cambia la página
function pagina_actual(){
	//Si esta declarada la variable global $_GET nos devuelves get, de otra forma nos devuleves 1 
	return isset($_GET['p']) ? (int)$_GET['p'] : 1; 
}



//Cuantos post por página queremos cargar y la conexion
//También calcula cuantos va a traer por página
function obtener_post($post_por_pagina, $conexion){
	//ejemplo: 3x2=6-2=4, mostrara del artículo 5 en adelante
	//? = entonces , ":" = de otra forma
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	//Obtener los post
	//Preguntamos a la bd, traeme todos los artículos desde $inicio y la cantidad
	//SQL_CALC_FOUND_ROWS sirve para saber cuantos artículos tenemos en la base de datos
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	//fetch() nos devuelve un arreglo pero solo queremos acceder a 'total'
	$total_post = $total_post->fetch()['total'];

	//El cálculo para saber cuantas páginas habrá en la paginación
	//ceil es para redondear
	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function id_articulo($id){
	//para que el usuario solo pueda poner un número
	return (int)limpiarDatos($id);
}

//le das la conexion y el id de la base de datos
function obtener_post_por_id($conexion, $id){
	//query(traemos artículos simples)
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	//ejecutamos el resultado
	$resultado = $resultado->fetchAll();
	//si hay resultado, entonces devuelve el resultado, de otra manera es falso
	return ($resultado) ? $resultado : false;
}

//Para poner la fecha con un mejor formato
//Convertimos el formato que tenemos con esta función
function fecha($fecha){
	//strtotime : Nos convierte una cadena de tiempo a fecha
	//strtotime lo utilizamos para extraer el día, el mes y el año
	$timestamp = strtotime($fecha);
	$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	$dia = date('d', $timestamp);
	//El mes lo traduciomos con el arreglos meses
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " .$meses[$mes] . " del $year";
	return $fecha;
}

//proteger los archivos, todos los que estarán en la carpeta de admin
function ComprobarSession(){
	//$_SESSION es un array
	if (!isset($_SESSION['admin'])) {
		header('Location: ' . RUTA);
	}
}

?>