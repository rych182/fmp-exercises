<?php

//pathinfo: Conocer la ruta, segundo parametro puede ser directorio o extensión del archivo

//PATHINFO_BASENAME: da el nombre del archivo con su extension
//echo pathinfo('documento.txt', PATHINFO_BASENAME);

//PATHINFO_DIRNAME te da el nombre de la carpeta o las carpetas donde está tu archivo
//echo pathinfo('documento.txt', PATHINFO_DIRNAME);

//PATHINFO_EXTENSION: Te da la extensión de tu archivo
//echo pathinfo('documento.txt', PATHINFO_EXTENSION);

//PATHINFO_FILENAME: Nos devuelve el nombre del documento
//echo pathinfo('documento.txt', PATHINFO_FILENAME);


//Nos permite buscar archivos dentro de una carpeta con la extensión que queramos
//$resultados = glob('*.php');

//Podemos decirle que queremos buscar archivos que comiencen con una letra
//$resultados = glob('a*.php');

//GLOB_BRACE: te permite poner varias extensiones,OJO no pongas espacios entre las extensiones
//GLOB_BRACE: Es muy útil para las imágenes y gif
//$resultados = glob('*.{php,txt,html}',GLOB_BRACE);

//GLOB_BRACE: también te permite buscar entre carpetas, OJO, pon bien los slash y nombre de carpetas 
//$resultados = glob('practicas/sesiones/*.{php,txt}', GLOB_BRACE);
//print_r($resultados);

//basename: elimina toda la ruta de tu archivo y como segundo parametro también podemos eliminar el parametro
//echo basename('carpeta1/carpeta2/archivo.php','.php');

//dirname: te devuelve la ruta de donde está tu archvo
echo dirname('carpeta1/carpeta2/archivo.php');
?>