<?php
session_start();
extract($_REQUEST);
include("conexion.php");
if (!isset($cantidad)) {
    $cantidad = 1;
}
if (isset($_POST['act'])) {
    $id = $_POST['id'];
    $nuevaCantidad = intval($_POST['cantidad']);
    if ($nuevaCantidad < 1) {
        $nuevaCantidad = 1;
    }
    if (isset($_SESSION['carro'])) {
        foreach ($_SESSION['carro'] as $clave => $producto) {
            if ($producto['id'] == $id) {
                $_SESSION['carro'][$clave]['cantidad'] = $nuevaCantidad;
                break;
            }
        }
    }
    header("Location: vercarrito.php?" . SID);
    exit();
} else {
    $qry = mysqli_query($catalogo, "SELECT * FROM catalogo WHERE id='" . $id . "'");
    $row = mysqli_fetch_array($qry);
    if (isset($_SESSION['carro'])) {
        $carro = $_SESSION['carro'];
    }
    $carro[md5($id)] = array(
        'identificador' => md5($id),
        'cantidad' => $cantidad,
        'producto' => $row['producto'],
        'precio' => $row['precio'],
        'id' => $id
    );
    $_SESSION['carro'] = $carro;
    header("Location: catalogo.php?" . SID);
    exit();
}
?>