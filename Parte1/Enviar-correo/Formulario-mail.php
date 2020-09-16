<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clase 7: Envio de correo con la función mail de PHP</title>
    <style>
        span{
            font-size: 1.2em;
            color: black;
            text-align: center;
            margin: 0 auto;
            position: relative;
        }
    </style>
</head>
<body>
    <form name="mail_frm" action="Enviar-mail.php" method="post" enctype="multipart/form-data">
        De: <input type="text" name="de_txt"> <br><br>

        Para: <input type="text" name="para_txt"> <br><br>

        Asunto: <input type="text" name="asunto_txt"> <br><br>

        Adjuntar archivo: <input type="file" name="archivo_fls"> <br><br>

        Mensaje: <br><textarea name="mensaje_txa" cols="30" rows="10"></textarea> <br><br>

        <input type="button" name="enviar_btn" value="Enviar"><br>
    </form>

<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if(isset($_GET["respuesta"])){
        echo "<span class='span'>".$_GET["respuesta"]."</span>";
    }
?>
    <script src="script.js"></script>
</body>
</html>