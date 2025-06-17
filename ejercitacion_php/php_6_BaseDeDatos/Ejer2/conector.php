<?php
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $db = "capitales";
    $basedatos = mysqli_connect($host, $usuario, $contraseña, $db);
    if (!$basedatos) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>