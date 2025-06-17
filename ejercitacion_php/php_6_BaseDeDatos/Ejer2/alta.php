<?php
include("conector.php");
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Ciudad <input name="ciudad">
    Pais <input name="pais">
    Cantidad de habitantes <input name="habitantes">
    Superficie <input name="superficie">
    Tiene metro <input type="checkbox" name="tieneMetro">
    <input type="submit" name="submit" value="Enviar">
</form>
<?php
}
    else{
        if (isset($_POST['tieneMetro'])) {
            $valorMetro = 1;
        } else {
            $valorMetro = 0;
        }
    $ciudad = mysqli_real_escape_string($basedatos, $_POST['ciudad']);
    $pais = mysqli_real_escape_string($basedatos, $_POST['pais']);
    $habitantes = (int) $_POST['habitantes'];
    $superficie = (float) $_POST['superficie'];

    $consultaAlta ="INSERT INTO ciudades SET ciudad = '$ciudad', pais = '$pais', habitantes = $habitantes, superficie = $superficie, tieneMetro = $valorMetro";
    $resultado = mysqli_query($basedatos, $consultaAlta);
    if($resultado == true) {
        echo "Consulta Enviada!";
        mysqli_close($basedatos);
    }
    else { 
        echo "Error en consulta";
        mysqli_close($basedatos);
    }
}
?>
<br>
<a href="principal.html">Volver a seleccion</a>