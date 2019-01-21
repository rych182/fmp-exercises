<?php

$conexion = new mysqli('localhost','root','','prueba_datos');
//Si te aparece un CERO, la conexion es correcta// echo $conexion->connect_errno;
if ($conexion->connect_errno) {
    die('Existe un problema con el servidor');
}else{
    //ejecutando una secuencia SQL
    //Selecciona todos nuestros registros
    //Otra forma $id = isset($_GET['id']) ? $_GET['id'] : 1;
    //$id = 2;
    //Otra forma pero te pueden inyectar codigo SQL
    //$sql = "SELECT * FROM usuarios WHERE id = $id"; 
    $sql = 'SELECT * FROM usuarios LIMIT 5';
    //Ejecutamos el codigo de arriba
    $resultado = $conexion->query($sql);
    //num_rows te trae el número de filas
    //echo $resultado->num_rows;

    if ($resultado->num_rows) {
        /*
        echo '<pre>'; la etiqueta te lo muestra en orden
        var_dump($resultado->fetch_assoc()); te muestra que es un array con strings
        echo $resultado->fetch_assoc()['Nombre']; te muestra el nombre
        echo '</pre>';
        */
        //Un bucle para mostrar todos los resultados
        while($fila = $resultado->fetch_assoc()){
            echo $fila['ID'] . ' - ' . $fila['Nombre'] . ' - ' . $fila['pais']."<br>";
        }
    }else{
        echo 'No hay datos';
    }

}

?>