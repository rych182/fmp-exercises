<?php
session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

//Para recibir los datos del formulario de registro
//Si el metodo de envío
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//recibir los datos
	//strtolower permite que el contenido nos lo devuelva en minúsculas
	//filter_var sirve para limpiar los valores
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	
	//En esta variable guardaré los posibles errores
	$errores = '';

	//Se comprueba que los campos no estén vacíos
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena los datos correctamente!</li>';
	}else{//Cuando no hay errores
		//comprobar que el usuario no exista y nos conectamos a la base de datos
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
		}catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		//Ejecutamos la conexión
		//traeme todos los usuarios donde el usuario sea igual al usuario que le pasemos y muestrame solo 1
		//Si ya existe un usuario con el mismo nombre te marcará un error
		$statement =$conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		//Ejecutamos nuestra consulta sql
		//Queremos que :usario sea igual a la linea 14
		$statement->execute(array(':usuario' => $usuario));
		//El metodo fetch devuelve el resultado en caso de que haya algún valor, si no hay resultado regresa false
		//La variable resultado guarda el registro del usuario que está repetido o false que significa que el usuario no existe y podemos registrar
		$resultado = $statement->fetch();
		if ($resultado != false) {
			$errores .= '<li>El nombre del usuario ya exite</li>';
		}
		//Vamos a sobre escribir la variable password
		//sha512 es un algoritmo, hay muchos mas algoritmos
		//Con la función hash vamos a encriptar con un algoritmo la variable password que son las contraseñas
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		//echo "$usuario . $password . $password2";
		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}	

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id,usuario,pass) VALUES (null,:usuario,:pass)');
		$statement->execute(array(':usuario' => $usuario, ':pass' => $password));
	
	//Una manera de detectar errores es poner un echo texto para que te imprima el texto y el error
		header('Location: login.php');
	}

}

require 'views/registrate.view.php';

?>