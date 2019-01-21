<?php
//Esto es lo que vez en el código fuente del navegador
//&lt;b&gt;negritas&lt;b&gt;
$variable = " <b>negritas<b> ";
echo htmlspecialchars($variable);

//trim() elimina espacial al inicio y al final
// echo trim($variable);
//strlen() te dice cuantos caracteres tiene la cadena 
// echo strlen($texto);
//substr() substrae un cacho del texto de tu cadena de texto
// y le dices que cacho quieres mostrar, donde comienza y donde termina 
//substr($variable,0,4);
//strtoupper() te pone tu cadena de texto en MAYUSCULAS
//strtoupper($variable);
//strtolower() te pone tu cadena de texto en MINÚSCULAS
//strtolower($variable);
//strpos() te dice la posición de la letra que buscas
//strpos($variable,'a');
?>