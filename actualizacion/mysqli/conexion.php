<?php

$conexion = new mysqli('localhost','root','','prueba_datos');

//Si te aparece un CERO, la conexion es correcta// echo $conexion->connect_errno;
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
    echo 'Todo esta OK';
}
?>