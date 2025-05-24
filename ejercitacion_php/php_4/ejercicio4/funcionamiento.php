<htm>  
<head>
<title> Ejercicio 4 Arrays y funciones</title>
</head>
<body>
<?php
include 'comprobar.php';
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Nombre Usuario: <input name="nombus">
<input type="submit" name="submit" value="Ir">
</form>
<?php
 }
else {
        $verif = comprobar_nombre_usuario($_POST['nombus']);
        if($verif){
            echo 'Todo en orden';
        }
        else{
            echo 'ERROR';
        }
    }
?>
</body>
</htm>