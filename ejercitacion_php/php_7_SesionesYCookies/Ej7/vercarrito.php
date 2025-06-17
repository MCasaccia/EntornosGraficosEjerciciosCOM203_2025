<?php
session_start();
$carro = $_SESSION['carro'];
?>
<html>
<head>
    <title>PRODUCTOS AGREGADOS AL CARRITO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1 align="center">Carrito</h1>
<?php
if ($carro) {
?>
<table width="720" border="1" cellspacing="0" cellpadding="4" align="center">
    <tr bgcolor="#CCCCCC">
        <td width="105">Producto</td>
        <td width="207">Precio</td>
        <td colspan="2" align="center">Cantidad de Unidades</td>
        <td width="100" align="center">Borrar</td>
        <td width="159" align="center">Actualizar</td>
    </tr>
    <?php
    $color = array("#ffffff", "#F0F0F0");
    $contador = 0;
    $suma = 0;
    foreach ($carro as $k => $v) {
        $subto = $v['cantidad'] * $v['precio'];
        $suma += $subto;
        $contador++;
    ?>
    <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
        <tr bgcolor="<?php echo $color[$contador % 2]; ?>">
            <td><?php echo $v['producto'] ?></td>
            <td><?php echo $v['precio'] ?></td>
            <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
            <td width="136" align="center">
                <input name="cantidad" type="text" value="<?php echo $v['cantidad'] ?>" size="8">
                <input name="id" type="hidden" value="<?php echo $v['id'] ?>">
            </td>
            <td align="center">
                <a href="borrar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>">Borrar articulo</a>
            </td>
            <td align="center"><input type="submit" name="act" value="Actualizar">
            </td>
        </tr>
    </form>
    <?php } ?>
</table>

<div align="center">Total de Artículos: <?php echo count($carro); ?></div><br>
<div align="center">Total: $<?php echo number_format($suma, 2); ?></div><br>

<div align="center">
    Continuar la selección de productos
    <a href="catalogo.php?<?php echo SID; ?>">volver al catalogo</a>&nbsp;
</div>

<?php } else { ?>
    <p align="center">
        No hay productos seleccionados
        <a href="catalogo.php?<?php echo SID; ?>">Ir al catalogo</a>
    </p>
<?php } ?>

</body>
</html>