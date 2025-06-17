<?php
include("conector.php");

$registrosPorPagina = 5;

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $registrosPorPagina;

$totalConsulta = "SELECT COUNT(*) FROM ciudades";
$totalFilas = mysqli_fetch_array(mysqli_query($basedatos, $totalConsulta))[0];
$totalPaginas = ceil($totalFilas / $registrosPorPagina);

$consultaLeer = "SELECT * FROM ciudades LIMIT $inicio, $registrosPorPagina";
$filas = mysqli_query($basedatos, $consultaLeer);
?>

<style>
    table {
        border-collapse: collapse;
        margin-bottom: 10px;
    }
    td, th {
        border: 1px solid black;
        padding: 5px;
    }
</style>

<table>
    <tr>
        <th>Id</th>
        <th>Ciudad</th>
        <th>País</th>
        <th>Habitantes</th>
        <th>Superficie</th>
        <th>¿Tiene metro?</th>
    </tr>
    <?php while ($imprimir = mysqli_fetch_array($filas)) { ?>
        <tr>
            <td><?php echo $imprimir[0]; ?></td>
            <td><?php echo $imprimir[1]; ?></td>
            <td><?php echo $imprimir[2]; ?></td>
            <td><?php echo $imprimir[3]; ?></td>
            <td><?php echo $imprimir[4]; ?></td>
            <td><?php echo $imprimir[5]; ?></td>
        </tr>
    <?php } ?>
</table>

<div>
    <?php if ($pagina > 1): ?>
        <a href="?pagina=<?php echo $pagina - 1; ?>">Anterior</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
        <?php if ($i == $pagina): ?>
            <strong><?php echo $i; ?></strong>
        <?php else: ?>
            <a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($pagina < $totalPaginas): ?>
        <a href="?pagina=<?php echo $pagina + 1; ?>">Siguiente</a>
    <?php endif; ?>
</div>

<a href="principal.html">Volver a selección</a>

<?php
mysqli_free_result($filas);
mysqli_close($basedatos);
?>