<?php
    session_start();
?>
<html>
<head>
    <title> Pagina 1 </title>
</head>
<body>
    <?php
        if(!isset($_SESSION["contador"])){
            $_SESSION["contador"] = 1;
        }else{
            $_SESSION["contador"]++;
        } 
    ?> 
    <a href="cont_visitas.php"> Visitar pagina 2 </a>
</body>
</html>