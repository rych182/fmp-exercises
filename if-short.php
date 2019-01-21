<?php

	
//isset da 1 o nada, eso es un valor boleado
//$edad = 18;
//echo isset($edad);


//esto funciona igual que un if, solo que la sintaxis es mas corta
$edad = (isset($edad)) ? $edad : 'el usuario no establecio su edad';

echo 'Edad:' . $edad;

?>