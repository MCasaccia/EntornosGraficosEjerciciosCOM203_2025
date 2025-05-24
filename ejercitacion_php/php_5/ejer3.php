<html>
<head>
<title>Compartir a un amigo</title>
</head>
<body>
    <h1>Comparte ésta pagina a tus amigos! rellena la información necesaria.</h1>
    <?php   
        if (!isset($_POST['submit'])) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nombre: <input name="nombre">
        Tu Email: <input name="desde">
        Email de tu amigo: <input name="hasta">
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
     }
    else {
        $hasta = $_POST['hasta'];
        $desde = 'From:' .$_POST['desde'];
        $nombre = $_POST['nombre'];
        $asunto = "Invitacion";
        $contenido="
        \n
        $nombre te a invitado a visitar nuestra pagina web! busca el siguiente link:\n
        www.mipaginaweb.com.ar \n
        ";
        mail($hasta, $asunto, $contenido, $desde);
        echo "Invitacion enviada.";

    }
    ?>
</body>
</html>