<?php

$meses = array(
	'Enero','Febrero','Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Septiembre','Octubre','Noviembre','Diciembre');

sort($meses); //ordena alfabeticamente y de mayor a menos
//rsort($meses)
$numeros = array(2,11,13,41,31,24,14,61);
// sort($numeros);
//


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
			foreach ($meses as $key) {
				echo "<li>" . $key  ." </li>";
			}
		?>

	</ul>
</body>
</html>
