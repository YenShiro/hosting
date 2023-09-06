<?php
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$description=$_POST['description'];
$creado=$_POST['creado'];


$conexion=mysql_connect("localhost","root","","bdejemplo");

$consulta= "insert into news values($id, '$titulo','$description','$creado')";

$resultado= mysqli_query($conexion,$consulta);
if ($resultado)
{

    echo "Datos agregados correctamente";

}
else{

    echo "Error al ingresar los datos";

}

mysqli_close($conexion);
?>