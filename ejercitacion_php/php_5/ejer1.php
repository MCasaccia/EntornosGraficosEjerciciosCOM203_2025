<?php
    $destinatario = "abcd@gmail.com";
    $asunto = "Envio mail tipo html";
    $cuerpo ='
    <html>
    <head>
    <title> Envio mail </title>
    </head>
    <body>
    <h1> Hola </h1>
    </body>
    </html>
    ';
    $headers = "MIME-Version:1.0\r\n";
    $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
    $headers .= "From: NN<nn@nn.com>\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers)
?>