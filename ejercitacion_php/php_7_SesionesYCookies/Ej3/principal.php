<?php
if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    setcookie("nombreCookie", $nombre, time() + 60*60*90*24);
}
else{
    if(isset($_COOKIE["nombreCookie"])){
        $nombre = $_COOKIE["nombreCookie"];
    }
    else{
        $nombre="ninguno";
    }
}
?>
<html>
    <head></head>
    <body>
        <h1>Ejercicio 3 // Nombres con Cookies</h1>
        <form action="principal.php" method="post">
            Ingrese un nombre <input type="text" name="nombre">
            <input type="submit" name="enviar">    
        </form>
        <br>
        <a><?php echo "Ultimo nombre ingresado: ".$nombre;?></a>
    </body>
</html>