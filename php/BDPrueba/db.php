<?php

$servidor = "localhost";
$usuario = "root";
$contraseha = "";
$BD = "test";


$conexion = mysqli_connect($servidor, $usuario, $contraseha, $BD);


if (!$conexion)
{

    echo "Fallo la conexion <br>";
    die("Connection failed: " . mysqli_connect_error() );

}
else{

    echo "Conexion Exitosa";

}

mysqli_close($conexion);
?>