<?php

header('Content-type: application/json; charset=utf-8');

//echo '[{"nombre": "Carlos","edad": 17}, {"nombre": "Alejandro"}]';
//json_encode(); pasa la estructura a JSON
$respuesta = [
	[
		'_id' => '4568',
		'nombre' => 'Carlos',
		'edad' => 23,
		'pais' => 'Mexico',
		'correo' => 'correo@correo.com'
	],
	[
		'_id' => '4534',
		'nombre' => 'Diego',
		'edad' => 25,
		'pais' => 'Mexico',
		'correo' => 'anzures@correo.com'	
	]
];

echo json_encode($respuesta);

