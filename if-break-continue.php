<?php

$paises = array('Argentina','Espana','Mexico','El Salvador','Costa rICA','Brasil');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hola mundo</h1>
	<ol>
		<?php
		//Continue sirve para saltar
		foreach ($paises as $pais) {
			if ($pais == 'Mexico') {
				break;
			}
			echo "<li>". $pais ."</li>" . "<br>";
		}
		?>
	</ol>
</body>
</html>