<?php

function suma($num1,$num2)
{
	$result = $num1 + $num2;
	echo  $result;
}

function suma1($num1,$num2)
{
	$result = $num1 + $num2;
	return "<br>" . $result;
}


function nombre($value)
{
	echo "<br>Hola " . $value;
}

function nombreDos($valor)
{
	return "<br>Hola " . $valor;
}

suma(2,3);
echo $result = suma1(2,3);
nombre("Ricardo");
echo nombreDos("Sutano");


?>