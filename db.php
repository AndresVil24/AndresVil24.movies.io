<?php
//configuracion necesaria para acceder a la base de datos
function conn(){
$hostname = "localhost"; 
$usuariobd = "root"; 
$passworddb = ""; 
$dbname = "proyecto peliculas"; 

// Generando la conexion con el servidor
$conectar = mysqli_connect($hostname, $usuariobd,$passworddb,$dbname);
return $conectar;
}


?>