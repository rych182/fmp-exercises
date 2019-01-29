/*
JSON: Un archivo JSON, es un arreglo donde dentro tenemos objetos
Pueden llevar texto,números, valores boleanos y objetos

*/

var carlos = {
	"nombre": "Carlos",
	"edad": 23,
	"pais": "Mexico"
}

var pedro = {
	"nombre": "Pedro",
	"edad": 32,
	"pais": "Peru"
}

//Ejemplo de JSON
var amigos = [
	{
		"nombre": "Carlos",
		"edad": 23,
		"pais": "Mexico"		
	},
	{
		"nombre": "Pedro",
		"edad": 32,
		"pais": "Peru"		
	}
];
console.log(amigos[0].pais);