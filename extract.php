<?php
//Explicacion Funcion extract

//Puedes extraer un valor de un array asociativo y declararlo como variable

$arreglo = array('nombre' => 'Ricardo', 'apellido' => 'Garrido');
extract($arreglo); 

echo $nombre;

//Puedes modificar el valor de la variable, PERO no el valor del arreglo asociativo


?>