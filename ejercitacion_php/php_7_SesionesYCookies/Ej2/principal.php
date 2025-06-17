<?php
if (!isset($_COOKIE["contador"])){
    $valor = 1;
    setcookie("contador", $valor, time() + 3600*24*365);
}
else{
    $valor = $_COOKIE["contador"] + 1;
    setcookie("contador", $valor, time() + 3600*24*365);
}
?>
<html>
    <head>

    </head>
    <body>
        <h1>Ejercicio 2 // Contador con Cookies</h1>
        <?php
        if ($valor >= 1){
            echo "Esta es tu visita n°".$_COOKIE["contador"];
        }
        else{
            echo "Bienvenido! es la primera vez que entras";
        }
        echo $valor;
        ?>
    </body>
</html>