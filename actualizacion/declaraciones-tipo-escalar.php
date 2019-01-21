<?php
//declare(strict_types=1) vuelve estricto el tipo de dato que ingresas
declare(strict_types=1);
//int: le indicas que quieres que sea un entero
//Te marca el error, en vez de ponerte 0 cuando pones una cadena de texto
//también hay string, int, bool, float y array
function cuadrado(int $numero){
    return $numero * $numero;
}
$numero = 9;
echo 'El cuadrado de '.$numero. 'es '.cuadrado($numero);

?>