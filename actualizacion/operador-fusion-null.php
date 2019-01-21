<?php
//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
//Version resumida del comentario del renglon2
$nombre = $_GET['nombre'] ?? 'Anonimo';
echo $nombre;
?>