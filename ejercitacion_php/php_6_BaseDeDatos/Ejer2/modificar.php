<?php
include("conector.php");
if (!isset($_POST['submit']) && !isset($_POST['submit2'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Id de fila a editar: <input name="id">
    <input type="submit" name="submit" value="Enviar">
</form>
<?php
}
elseif (isset($_POST['submit'])){
    $id = $_POST['id'];
    $consultaSeleccionar = "SELECT * FROM ciudades WHERE id = $id";
    $extraer = mysqli_query($basedatos, $consultaSeleccionar);
    $fila = mysqli_fetch_row($extraer);
    echo"
    <tr>
        <td>ID: $fila[0] </td>
        <td>CIUDAD: $fila[1]</td>
        <td>PAIS: $fila[2]</td>
        <td>HABITANTES: $fila[3]</td>
        <td>SUPERFICIE: $fila[4] </td>
        <td>TIENE METRO?: $fila[5] </td>
    </tr>
    ";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Que atributo quiere cambiar? <select name="opcionEdit">
            <option>ciudad</option>
            <option>pais</option>
            <option>habitantes</option>
            <option>superficie</option>
            <option>metro</option>
        </select>
        Valor a utilizar: <input name="cambio">
        <input type="submit" name="submit2" value="Enviar">
        </form>
        <?php
        }
        elseif (isset($_POST['submit2'])){
            $id = $_POST['id']; 
            $opcion = $_POST['opcionEdit'];
            if($opcion == "ciudad"|| $opcion == "pais"){ $cambio = "'". mysqli_real_escape_string($basedatos, $_POST['cambio'])."'";}
            if($opcion == "habitantes" || $opcion == "metro"){$cambio = (int) $_POST['cambio'];}
            if($opcion == "superficie"){$cambio = (float) $_POST['cambio'];}
            $consultaEditar = "UPDATE ciudades SET $opcion = $cambio WHERE id = $id";
            $resultado2 = mysqli_query($basedatos, $consultaEditar);
            if($resultado2 == true){echo "Cambio realizado";mysqli_close($basedatos);}
            else{echo "Error en la consulta";mysqli_close($basedatos);}
        }
        ?>
        <br>
        <a href="principal.html">Volver a seleccion</a>