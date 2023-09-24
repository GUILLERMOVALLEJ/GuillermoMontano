<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "Entregable";


$conexion = new mysqli($host,usuario, $contraseña, $base_de_datos);


if ($conexion->connect_error) { 
    die("La conexion a la base de datos fallo: " . $conexion->connect_error);
}else{
    echo "La conexion fue exitosa.";
} 
    
?>   

