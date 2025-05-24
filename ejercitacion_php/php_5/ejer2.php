<html>
<head>
<title>Pagina de Contacto</title>
</head>
<body>
    <h1>Metodo de contacto</h1>
    <p>Utiliza el formulario para contactarte con el administrador de la pagina</p>
    <?php   
        if (!isset($_POST['submit'])) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nombre: <input name="nombre">
        Email: <input name="email">
        Comentario: <p><label><textarea name="comentario" cols="32" rows="6"></textarea></label></p>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
     }
    else {
        $hasta = 'admin@sitio.com';
        $fecha=date("d-m-Y");
        $hora= date("H :i:s"); 
        $asunto= "Comentario";
        $desde = 'From:' .$_POST['email'];
        $contenido="
        \n
        NOMBRE: $_POST[nombre]\n
        EMAIL: $_POST[email]\n
        COMENTARIO: $_POST[comentario]\n
        Enviado: $fecha // $hora\n
        \n
        ";
        mail($hasta, $asunto, $contenido, $desde);
        echo "Consulta enviada.";

    }
    ?>
</body>
</html>