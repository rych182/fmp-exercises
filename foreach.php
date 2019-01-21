<?php

$meses = array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Septiembre','Octubre','Noviembre','Diciembre');


$compa = array('Nombre'=>'Edgar','Nacionalidad'=>'mexicana','Edad'=>12 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php 
		//	foreach ($meses as $mes) {
		//		echo "<li>" . $mes  ." </li>";
		//	}
		foreach ($compa as $datos => $value) {
			echo "<li>". $datos . " : " . $value  ." </li>";
		}

		?>		
		
	</ul>
</body>
</html>