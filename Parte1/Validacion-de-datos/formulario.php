<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 3: Validación de Datos con PHP</title>
</head>
<body>
    <?php

        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);        //Para que no muestre avisos ni warnings
        if($_GET["error"]=="si"){
            echo "<span style='color:red; font-size: 2em;'>VERIFY YOUR DATES</span>";
        }
    ?>

    <hgruoup><h1>Formulario de Datos GET</h1></hgroup>
        <!--action  es la direccion a donde vas a enviar los datos del formulario-->
    <form action="validar-datos.php" name="valida_datos_get_frm" method="get" enctype="application/x-www-form-urlencoded">
        Add your name: 
        <input type="text" name="name_txt">
        <br><br>

        Add your password:
        <input type="password" name="password_txt">
        <br><br>

        <input type="radio" name="sex_rdo" value="M"> Masculino
        <input type="radio" name="sex_rdo" value="F"> Femenino
        <br><br>

        <input type="hidden" name="enviar_hdn" value="get"> <!--Estos no aparecen, pero nos ayudan para que sepamos al momento de enviar cual formulario envio el usuario si el de get o post-->
        <input id="enviar-get" type="button" name="send_btn" value="Send by GET">   
    </form>


    <hgruoup><h1>Formulario de Datos POST</h1></hgroup>
    <form action="validar-datos.php" name="valida_datos_post_frm" method="post" enctype="application/x-www-form-urlencoded">
        Add your name: 
        <input type="text" name="name_txt">
        <br><br>

        Add your password:
        <input type="password" name="password_txt">
        <br><br>

        <input type="radio" name="sex_rdo" value="M"> Masculino
        <input type="radio" name="sex_rdo" value="F"> Femenino
        <br><br>

        <input type="hidden" name="enviar_hdn" value="post"> <!--Estos no aparecen, pero nos ayudan para que sepamos al momento de enviar cual formulario envio el usuario si el de get o post-->
        <input id="enviar-post" type="button" name="send_btn" value="Send by POST">   
    </form>  

    <br><br><br>                 
    <span><i>Si quiero quitar el texto rojo, entonces debo quitarle en el URL el texto <strong>"error=si"</strong></i></span>                                               <!--el onclick hace que cuando se envia ejecuta la función dn JS-->
    
    <script src="script.js"></script>
</body>
</html>