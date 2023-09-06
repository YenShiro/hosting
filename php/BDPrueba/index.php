<?php
//este es para crear usuarios dentro de la base de datos

include("db.php");


$titulo = $_POST("titulo");
$descripcion = $_POST("descripcion");


$passwordHash = password_hash($password, PASSWORD_BCRYPT); //bcrypt es el algoritmo de encriptacion


// evaluamos si el titulo ingresado ya existe
$consultaId = "SELECT titulo
FROM registro
WHERE titulo= '$titulo' ";

$consultaId = mysql_query($conexion, $consultaId); //devuelve un objeto con el resultado, false si hay un error, true si se ejecuta
$consultaId = mysql_fetch_array($consultaId); // devuelve un array o NULL

if ($consultaId){

$sql = "INSERT INTO registro VALUES ('$titulo', '$descripcion')"

// vereficar con la ejecucion si se guardaron los datos
if (mysql_query($conexion, $sql)) {

// el mkdir() sirve para crear una carpeta en imagenes para el usuario

echo "tu perfil ha sido creado."
echo "<br> <a href='..registro.html'>Iniciar sesion </a></div>";

}
else {
    echo "Error: " . $sql . "<br>" . mysql_error($conexion);
    
}

}
else {
    echo "El nickname ya existe.";
    echo "<a href='registro.html'> Intentalo de nuevo. </a></div> "
}

//para cerrar la conexion
mysqli_close($conexion);


?>