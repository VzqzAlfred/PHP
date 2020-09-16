<?php
    // creamos las variables de lo que recibimos por parte del formulario
    $_de = $_POST["de_txt"];
    $_para = $_POST["para_txt"];
    $_asunto = $_POST["asunto_txt"];
    $_mensaje = $_POST["mensaje_txa"];

    /*  La función MAIL necesita 4 parámetros 
        - para quien es
        - el asunto
        - el mensaje
        - las cabeceras (es opcional)
    */

    /*               CABECERAS        */
    // esta variable ayuda a que no aparezcan codigos extraños al momento de enviar el correo
    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";    // Para que las ñ y acentos aparezcan
    $cabeceras .= "From: $_de \r\n";
    

    /* funcion: para enviar el correo electrónico necesita 4 parametros 
        PARA
        ASUNTO
        Y CABECERAS  
    */
   
    if(mail($_para, $_asunto, $_mensaje, $cabeceras)){
        $respuesta = "El mensaje ha sido enviado.";
    } else {
        $respuesta = "Ha ocurrido un error.";
    }

    // Y se redirecciona al enviar mensaje
    header("Location: Formulario-mail.php?respuesta=$respuesta");
?>