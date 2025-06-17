<?php
    if(isset($_POST["colores"])){
        $estilo = $_POST["colores"];
        setcookie("color", $estilo, time()+(60 * 60 * 24 * 90));
    }
    else{
        if (isset($_COOKIE["color"])){
            $estilo = $_COOKIE["color"];
        }
    }
?>
<html>
    <head>
        <?php
        if(isset($estilo)){
            echo '<link rel="STYLESHEET" type="text/css" href="'.$estilo.'.css">';
        }
        ?>
    </head>
    <body>
        <h1>Ejercicio 1 - Practica 7 // Estilos con Cookies</h1>
        <h2>Elige un color para las letras:</h2>
        <form action="principal.php" method="post">
            <select name="colores">
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
                <option value="rosa">Rosa</option>
            </select>
            <input type="submit" value="Actualizar estilo">
        </form>
        <br>
        <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>
    </body>
</html>