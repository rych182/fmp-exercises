<?php
$id = $_GET['id']; //Solo sirve cuando poner el id en la URL
//PDO('tipo de base de datos:host=nombre de tu host;nombre de tu base de datos = ','usuario','contraseña' )
try{
	//codigo
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos','root','');
	//echo "Conexión lista!";
	//METODO QUERY
	//Aquí puedes poner mas lineas de código para traer datos
	//Queremos acceder al metodo query de nuestra conexión 
	//$resultados = $conexion->query("SELECT * FROM usuarios WHERE id = 1 ");
	//foreach ($resultados as $key) {
	//	echo $key['ID'] . " - " . $key['nombre'] . "<br>";
	//}


	//PREPARED STATEMENTS(CONSULTAS PREPARADAS)
	//Esto evita que el usuario pueda inyectar código en nuestra aplicación
	//Con estas 2 lineas de codigo ejecutamos la consulta.
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE ID = :ID');
	$statement->execute(array(
		':ID' => $id
		));
	

	//INSERTANDO DATOS A LA BASE DE DATOS
	//$statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Chabelo")');
	//$statement->execute();


	//Utilizamos fetch y fetchAll para mostrar
	//Esto siempre lo harémos igual, nunca va a cambiar
	$resultados = $statement->fetchAll();
	foreach ($resultados as $key) {
		echo $key['nombre'] . "<br>";
	}

//Este codigo comentao es la impresión del METODO QUERY
//	echo "<pre>";
//	print_r($resultados);
//	echo "</pre>";

}catch(PDOException $e){
	//Muestra error
	echo "Error: " . $e->getMessage();
}

?>