<?php

//setcookie sirve para crear una cookie nueva, primer parametro es el nombre y segundo el valor que queremos guardar
//y el tercero es el parámetro de tiempo que queremos que dure nuestra cookie
//El segundo valor lo vamos a guardar por ejemplo cuando rellena un formulario por ejemplo un combo box
//por ejemplo que el usuario escoja entre un rango de pixeles
//la función time() nos devuelve , seg/min/hrs/dias , esta cookie dura un año
//El cuarto parámetro es donde quiere que se guarde, si quieres la misma carpeta solo pon "/"
setcookie('font-size','30px', time() + 60 * 60 * 24 * 365, "/");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Cookie Seteada</h1>
</body>
</html>