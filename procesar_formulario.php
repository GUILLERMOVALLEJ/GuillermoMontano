<!DOCTYPE html>
<html>
<head>
        <title>Procesar Formulario</title>
</head>
<body>
    
<h2>Datos del Formulario</h2>

<?php
if ($_SERVER ["REQUESTE_METHOD"] == "POST")  { 
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    echo "<table border='1'>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    echo "<tr><td>Nombre:</td><td>" . $nombre . "</td></tr>";
    echo "<tr><td>Correo Electrónico:</td><td>" . $email ."</td></tr>";
    echo "<tr><td>Mensaje:</td><td>" . $mensaje . "</td></tr>";
    echo "</table>";
}   else  { 
     echo "Acceso no permitido.";
}
?>

</body>
</html>
