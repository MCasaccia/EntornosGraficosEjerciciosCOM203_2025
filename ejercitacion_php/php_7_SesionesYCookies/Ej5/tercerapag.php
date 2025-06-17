<?php
session_start();
echo "Los datos son:"."<br>";
echo "Nombre: ".$_SESSION["nombre"]."<br>";
echo "Clave: ".$_SESSION["clave"]."<br>";
?>