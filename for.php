<?php
/* 1 AL 10
for ($i=0; $i < 10; $i++) { 
	echo "Hola <br>";
	echo "Sutano <br>";
}
*/

/*10 AL 1
for ($i=10; $i >= 1; $i--) { 
	echo $i . "<br>";
}
*/

/*Contando de 5 en 5
for ($i=0; $i <= 50; $i= $i + 5) { 
	echo $i . "<br>";
}
*/

/*
$meses = array('Enero','Febrero','Marzo','Abril',
				'Mayo','Junio','Julio','Agosto',
			'Septiembre','Octubre','Noviembre','Diciembre');

for ($i=0; $i < count($meses) ; $i++) { 
	echo $meses[$i] . "<br>";
}
*/
$meses = array('Enero','Febrero','Marzo','Abril',
				'Mayo','Junio','Julio','Agosto',
			'Septiembre','Octubre','Noviembre','Diciembre');

$i = 0;
while ($i < count($meses)) {
	echo $meses[$i] . "<br>";
	$i++;
}

?>