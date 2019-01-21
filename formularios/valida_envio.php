<?php
//$_SERVER sirve para checar el metodo con el que se envían los datos
//if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//	echo "Se envió por GET";
//}else{
//	echo "Se envió por POST";
//}


//NOTA IMPORTANTE	
//Se recomienda el primer metodo solo si se tiene un formulario
//Este segundo método te sirve para identificar de que formulario se ha enviado
//ya que quizás tengas varios formularios

if (isset($_POST['submit'])) {
	echo "Se ha enviado los datos correctamente";
	print_r($_POST['submit']);
}


?>