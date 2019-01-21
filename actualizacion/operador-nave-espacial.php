<?php
//Casi no se utiliza
//Suele utilizarse para comparar algoritmos de comparacion

// Regresa 1 si el valor enla izquierda es mayor que el de la derecha
// Regresa 0 si ambos son iguales
// Regresa -1 si el de la derecha es mayor

//echo 1<=>1;
$arreglo=[3,2,1,4,5];
function comparar($a,$b){
    return $a <=> $b;
}
usort($arreglo,'comparar');
echo implode(' - ',$arreglo);

//TODO ESTO CASI NO SE USA
//Se usa en empresas cientificas o estadisticas
?>