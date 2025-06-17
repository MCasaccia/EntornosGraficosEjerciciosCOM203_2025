<?php 
include("conexion.php");
session_start();

$mail = $_POST["mail"];
$qry1 = mysqli_query($tabla, "SELECT * FROM alumnos WHERE mail = '$mail'");
$result = mysqli_fetch_array($qry1);
if (!$result) {
    echo "error";
    $_SESSION['bandera'] = false;
    unset($_SESSION['nombre']);
    mysqli_close($tabla);
    header("Location: ingreso.php");
    exit();
}
elseif($result[3]  == $mail){
    $nombre = $result[1];
    $_SESSION['nombre'] = $nombre;
    $_SESSION['bandera'] = true;
    mysqli_close($tabla);
    header("Location: ingreso.php");
    exit();
}

?>