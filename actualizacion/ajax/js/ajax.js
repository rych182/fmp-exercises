var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click',function() {
	var peticion = new XMLHttpRequest();
	//direccion del archivo al que queremos acceder, que seria el encargado de traer usuarios de la BD y devolverlo al archivo Javascript
	//peticion.open('GET','http://www.json-generator.com/api/json/get/bVZqYvCphK?indent=2');
	peticion.open('GET','php/usuarios.php');

	//Poniendo la bolita que carga de CSS
	loader.classList.add('active');

	peticion.onload = function(){ //Ejecuta la función cuando la peticion ya cargo y podemos acceder a los datos
		//JSON.parse nos transforma el texto en un archivo json que Javascript pueda leer
		var datos = JSON.parse(peticion.responseText);
		for (var i = 0; i < 5; i++) {
			var elemento = document.createElement('tr');
			elemento.innerHTML += ("<td>" + datos[i]._id + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			//Accedemos a la tabla y agregamos 'elemento'
			document.getElementById('tabla').appendChild(elemento);
		};


		/* Esta es otra opción a la de arriba con el for, pero con el for podemos controlar cuantas veces se muestra
		datos.forEach(persona => {//Este codigo se repetira por cada una de las personas que tenemos
			var elemento = document.createElement('tr');
			elemento.innerHTML += ("<td>" + persona._id + "</td>");
			elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
			elemento.innerHTML += ("<td>" + persona.edad + "</td>");
			elemento.innerHTML += ("<td>" + persona.pais + "</td>");
			elemento.innerHTML += ("<td>" + persona.correo + "</td>");
			//Accedemos a la tabla y agregamos 'elemento'
			document.getElementById('tabla').appendChild(elemento);
		});
		*/

	}

	//readystatechange nos permite ejecutar una función, se va ejecutar cada que el estado de nuestra funcion cambie
	peticion.onreadystatechange = function(){
		// Los estados significaque estamos enviando la petición y cuando ya la recibimos
		//console.log(peticion.readyState); 2 significa que la peticion fue recibida,3 esta siendo procesada y
		// 4 la petición ha sido finalizada y la rspuesta esta lista
		//peticion.status es un mensaje que nos va a decir si todo esta correcto o hay un problema
		//estado 200 significa que todo esta correcto
		if (peticion.readyState == 4 && peticion.status == 200 ) {
			//Si todo esta bien, quitamos la ruedita
			loader.classList.remove('active');
		};
	}
	peticion.send();
});

