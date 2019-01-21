<?php

//Conección a base de datos usando la función mysql_connect
//mysql_connect('direccion servidor', 'usuario',contraseña) pueden ser ('localhost','root','');

//guardamos la conección en una variable
//or die() sirve para cortar la navegación del usuario si falla la base de datos
//PASO 1
$conexion = mysql_connect('localhost','root','') or die('Hubo problemas con la base de datos');

//selecciona la base de datos que queremos trabajar y pones las conexión
//PASO 2
mysql_select_db('prueba_datos',$conexion);

//PASO 3
//Ejecutar la consulta, pero no la muestra
$resultados = mysql_query('SELECT * FROM usuarios');

//Si quieres agregar datos con PHP, esta es la manera
//$resultados = mysql_query('INSERT INTO usuarios values(null,'Luis')');


//PASO 4
//Muestra el resultado, practicamente traduce los resultados para que los podamos ver en la pantalla
//al usar mysql_fetch_object se manda a llamar como un objeto

//while ($fila = mysql_fetch_object($resultados)) {
//	echo $fila->nombre . "<br>";
//}

//PASO 4-1
//Sirve para hacerlo como si fueran arrays
while ($fila = mysql_fetch_array($resultados)) {
	echo $fila['nombre']. "<br>";
}



//$fila = mysql_fetch_object($resultados);
//echo $fila->nombre;


//Ojo, si tu imprime 2,3 o las veces que sean, te va a mostrar un dato, osea de 1 en 1, si quieres mostrar muchos datos, usa ciclos
//$fila = mysql_fetch_object($resultados);
//echo $fila->nombre;

?>