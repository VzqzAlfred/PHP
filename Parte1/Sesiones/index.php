<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 7: Sesiones con PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
        
        <?php   // vamos a crear una variable en caso que el usuario se equivoque

            error_reporting(E_ALL ^ E_NOTICE);   // PAREA QUE NO MUESTRE MENSAJES DE AVISO O RECOMENDACIONES
            if($_GET["error"] == "si"){
                echo "<span>Verifica tus datos</span>";
            } else {
                echo "Inicia sesión introduciendo tus datos";
            }
        ?>
        
        <br><br>
        Usuario: <input type="text" name="usuario_txt"> <br><br>

        Contraseña: <input type="password" name="password_txt"> <br><br>

        <input type="submit" name="entrar_btn" value="Entrar">

    </form>
</body>
</html>