<?php

//primer parametro -> servidor
//segundo parametro -> Usuario de base de datos
//tercer parametro -> contraseña
//cuarto parametro -> Nombre de la base de datos


$enlace = mysqli_connect("localhost", "root", "", "curso_backend");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



    


/*
A             -> Alta, insertar registros sin importar ningun filtro
B             -> Baja, Borrar registros por filtro o clausula where
M             -> Modificacion, actualiza uno o muchos atributos por filtro o clausula where
L             -> Listra o trae los registros y puede o no tener una clausula where
*/ 
$sql = "SELECT * FROM usuario";
$result = $enlace ->query($sql);

$row = $result -> fetch_array(MYSQLI_ASSOC);

echo json_encode($row);








    ?>