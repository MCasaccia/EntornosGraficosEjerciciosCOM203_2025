<?php 
session_start();
if (isset($_SESSION['nombre'])) {
    echo' <h1> Bienvenido alumno '.$_SESSION['nombre'].'</h1>';
}
else{
    echo '<h1> Error, no existe el alumno</h1>';
}
?>