<?php
session_start();
//Comprobar que el usuario no tenga una sesón
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

//comprobar si se enviaron los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);


	//conectarnos a la base de datos
	//Esta conexión es la misma que el de registrate.php, podríamos hacerlo con una función y mandarla llamar
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}

	//Verificar si hay usuarios en la base de datos y si el nombre y contraseña son los mismos
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');

	//ejecutamos la sentencia
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));

	//guardamos el resultado, el método fetch nos devuelve el resultado
	//Si este, es falso quiere decir que se equivocaron en el usuario o password
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		//Si el resultado es diferente a false, quiere decir que los datos son correctos
		//Creamos una sesiom
		$_SESSION['usuario'] = $usuario;
		header('Location:index.php');
	}else{
		$errores .= '<li>Datos incorrectos</li>';
	}

}

require 'views/login.view.php';



?>