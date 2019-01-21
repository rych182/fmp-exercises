<?php

//file_exists: Comprobar si un archivo existe y si no, lo creamos
//file_exists('documento.txt')

//file_get_contents: Leer el contenido y mostrarlo en pantalla.

//file_put_contents: modifica el archivo 
//file_put_contents('documento.txt',"\nSoy el cuarto renglon!",FILE_APPEND); 

//file_put_contents('documento.txt','');
//for ($i=1; $i <= 10 ; $i++) { 
//	file_put_contents('documento.txt',"$i \n",FILE_APPEND);
//}

//file(); : sirve para volver cada linea del archivo en un espacio de un arreglo
$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);
?>