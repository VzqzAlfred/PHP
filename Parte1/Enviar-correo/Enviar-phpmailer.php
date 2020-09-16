<?php
    // creamos las variables de lo que recibimos por parte del formulario
    $_de = $_POST["de_txt"];
    $_para = $_POST["para_txt"];
    $_asunto = $_POST["asunto_txt"];
    $_mensaje = $_POST["mensaje_txa"];

    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";    // Para que las ñ y acentos aparezcan
    $cabeceras .= "From: $_de \r\n";
    

    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = $_FILES["archivo_fls"]["name"];
   
    if(move_uploaded_file($archivo, $destino)){
        //inluyo la clase phpmailer
        include_once("class.phpmailer.php");
        include_once("class.smtp.php");

        $mail = new PHPMailer();    // Creo un objeto del tipo PHPMailer
        $mail->IsSMPT();            // Protocolo SMTP 
        $mail->SMTPAuth = true;     // Autenticación en el SMTP
        $mail->SMTPSecure = "ssl";  // SSL security socket layer
        $mail->Host = "smtp.live.com";  //servidor de SMTP de gmail
        $mail->Port = 587;              // puerto del servidor de outlook
        $mail->From = $_de;             //remitente
        $mail->AddAddress($_para);       // destinatario
        $mail->Username = "shadow_fenix96@hotmail.com";  // mi correo
        $mail->Password = "naziastamorir";
        $mail->Subject = $_asunto;
        $mail->Body = $_mensaje;
        $mail->wordwrap = 50;
        $mail->MsgHTML($_mensaje);
        $mail->AddAttachment($destino);

        if($mail->Send()){      // enviamos el correo por PHPMailer
            $respuesta = "El mensaje se ha enviado con la clase PHPMailer.";
        } else {
            $respuesta = "El mensaje no se pudo enviar con la clase PHPMailer.";
            $respuesta .= "Error: ".$mail->ErrorInfo;
        }
        

    } else {
        $respuesta = "Ha ocurrido un error al subir un archivo adjunto.";
    }

    header("Location: Formulario-mail.php?respuesta=$respuesta");
?>