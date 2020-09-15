<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2: Envio de datos por GET y POST</title>
</head>
<body>                                                  
    <hgroup><h1>Formulario enviado por el metodo GET</h1></hgroup>
                    <!--action   es que acción va a hacer, y es enviar datos por el metodo get          enctype, es el tipo de encriptación-->                             
    <form name="envia-get_frm" action="envio-datos.php" method="get" enctype="application/x-www-form-url-urlencoded">
        <label>Add your name: </label>
            <input type="text" name="nombre_txt">
        
        <br><br>

        <label>Add your password: </label>
            <input type="password" name="password_txt">

        <br>

        <input type="submit" name="enviar_btn" value="Enviar-GET">
        <!--Cuando le damos enviar lo enviamos al documento de envio-datos.php  lo cual en la barra de url dice que se envio-->
    </form>


<hgroup><h1>Formulario enviado por el metodo POST</h1></hgroup>
    <form name="envia-post_frm" action="envio-datos.php" method="post" enctype="application/x-www-form-url-urlencoded">
        <label>Add your name: </label>
            <input type="text" name="nombre_txt">
        
        <br><br>

        <label>Add your password: </label>
            <input type="password" name="password_txt">

        <br>
                    <!--En POST se encripta la infromación no aparece en el URL la info que se ha enviado-->
        <input type="submit" name="enviar_btn" value="Enviar-POST">
    </form>
</body>
</html>