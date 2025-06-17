<?php 
include("conexion.php");
session_start();
?>
<html>
    <head></head>
    <body>
        <h1> Ingreso Alumnos</h1>
        <form action="subida.php" method="post">
        Ingrese su mail
        Mail: <input type="text" name="mail">
        <input type="submit" value="Enviar">
        </form>
    <?php
        if(isset($_SESSION['bandera'])){
            if($_SESSION['bandera'] == true){
                echo '<p> Usuario encontrado! </p>';
            }
            else{
                echo '<p> Error en el formulario </p>';
            }  
    }
    mysqli_close($tabla);
    unset($_SESSION['bandera']);
    ?>
    <a href="bienvenido.php">Sitio de Alumnos</a>
    </body>
</html>