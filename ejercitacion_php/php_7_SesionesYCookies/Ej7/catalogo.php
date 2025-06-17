<?php
ob_start("ob_gzhandler");
session_start();

include("conexion.php");

$carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : false;


$qry = mysqli_query($catalogo, "SELECT * FROM catalogo ORDER BY producto ASC");
if (!$qry) {
    die("Error en la consulta: " . mysqli_error($catalogo));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CATÁLOGO</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1" cellpadding="4" cellspacing="0" style="margin: auto;">
        <tr bgcolor="#DFDFDF">
            <td><strong>Producto</strong></td>
            <td><strong>Precio</strong></td>
            <td>
                <a href="vercarrito.php?<?php echo SID ?>" title="Ver el contenido del carrito"> Ir a mi carrito
                </a>
            </td>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($qry)) {
            $idHash = md5($row['id']);
            $enCarrito = $carro && isset($carro[$idHash]['identificador']) && $carro[$idHash]['identificador'] === $idHash;
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row['producto']); ?></td>
            <td><?php echo number_format($row['precio'], 2); ?></td>
            <td>
                <?php if (!$enCarrito) { ?>
                    <a href="agregar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"> Agregar al carrito
                    </a>
                <?php } else { ?>
                    <a href="borrar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">  Borrar del carrito
                    </a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
ob_end_flush();
?>