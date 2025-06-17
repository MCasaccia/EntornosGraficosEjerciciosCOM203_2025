<?php
include("conector.php");
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Id de fila a eliminar: <input name="id">
    <input type="submit" name="submit" value="Enviar">
</form>
<?php
}
    else{
        $id = (int) $_POST['id'];
        $query = "DELETE FROM ciudades WHERE id = $id";
        $resultado = mysqli_query($basedatos, $query);
        if($resultado == true){
            echo "Se elimino la fila";
            mysqli_close($basedatos);
        }
        else{
            echo "Error en la consulta";
            mysqli_close($basedatos);
        }
    }
?>
<br>
<a href="principal.html">Volver a seleccion</a>