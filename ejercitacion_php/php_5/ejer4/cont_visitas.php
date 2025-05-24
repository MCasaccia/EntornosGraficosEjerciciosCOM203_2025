<?php
    session_start();
?>
<html>
<head>
    <title> Pagina 2 </title>
</head>
<body>
    <a href="principal.php"></a>
    <?php
        echo "Visitaste"." ".($_SESSION["contador"])." "."Paginas"
    ?>
    <br>
    <a href="principal.php">Visitar pagina 1</a> 
</body>
</html>