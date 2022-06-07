<?php
include_once('db.php');
//Recibo todos los datos del formulario
$nombre=$_POST['nombre'];
$año=$_POST['año'];
$genero=$_POST['genero'];
$director=$_POST['director'];

echo "Los datos son los siguientes: <br>";
echo "$nombre,$año,$genero y $director";

$conectar = conn(); //ejecutar las conexiones a la b.d.
$sql="INSERT INTO peliculas (nombre,año,genero,director)
VALUES ('$nombre','$año','$genero','$director')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";


?>

