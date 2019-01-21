<?php

	//Se puede meter 
	//$tamano = '30px';
//Le decims el valor de la cookie a la que queremos acceder

if (isset($_COOKIE['font-size'])) {
	$tamano = htmlspecialchars($_COOKIE['font-size']); //con htmlspecialchars te proteges de inyección de código 
}else{
	$tamano = '15px';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Texto</title>
<style>
	p{
		/*Se puede poner php en el css*/
		font-size:  <?php echo $tamano; ?> ;
	
	}
</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quidem, quibusdam. 
	Ducimus eligendi repudiandae natus error eveniet consectetur veniam in et, nobis hic, laudantium non incidunt deserunt atque praesentium temporibus!</p>
</body>
</html>