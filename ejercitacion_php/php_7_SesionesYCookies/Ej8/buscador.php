<?php
include("conexion.php");
?>
<html>
    <head></head>
    <body>
        <?php
        $palabra = $_POST['campo'];
        if($palabra){
            $qry = mysqli_query($canciones, "SELECT * FROM buscador WHERE canciones LIKE '%".$palabra."%'");
            if(mysqli_num_rows($qry)=="0"){
                 echo "No hay resultados respecto a la palabra que busca.";
                 echo "<div style='text-align: center;' ><a href='formulario.html'> Volver a buscador</a></div>";
            }
            else{
                 echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";
                 ?> <table align="center"> <?php
                while($cat = mysqli_fetch_array($qry)){?>
                <tr>
                <td><?php echo ($cat['canciones']); ?></td>
                </tr>
                <?php } ?> </table> <?php }
                echo "<div style='text-align: center;' ><a href='formulario.html'> Volver a buscador</a></div>";
            }
?>    
    </body>
</html>