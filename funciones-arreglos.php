<?php

//Extrae los elementos asociativos como si fueran variables
//$amigo = array('telefono' => 65432109, 'nombre' => 'ricardo', 'edad'=>19,'boleano'=> true);
//extract($amigo);
//echo $boleano;

$semana = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
//$ultimo_dia = array_pop($semana);
//foreach ($semana as $dia) {
//	echo $dia . "<br>";
//}

//echo $ultimo_dia;

//Count nos cuenta cuantos datos tiene dentro el array
//echo count($semana);
//Join nos separa los datos del array con lo que le indiquemos
//echo join(' - ', $semana);

//también puedes mezclar varias funciones como en el EJEMPLO:
//rsort($semana);
//echo join(' - ',$semana);

$semana_reverse = array_reverse($semana);
echo join(' - ', $semana_reverse);

?>