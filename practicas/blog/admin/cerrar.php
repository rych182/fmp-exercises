<?php
session_start();

session_destroy();

//$_SESSION es un arreglos
//Con esto lo estamos reiniciando por que le decimos que es un arreglo en blanco
$_SESSION = array();


header('Location: ../');
die();


?>