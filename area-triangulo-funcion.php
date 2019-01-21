<?php

function area($base,$altura)
{
	$resultado = ($base*$altura)/2;
	return "El area del triangulo es: " . $resultado;
}

echo $resultado = area(4,5);
?>