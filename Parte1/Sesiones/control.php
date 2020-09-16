<?php

    if($_POST["usuario_txt"] == "Alfred" && $_POST["password_txt"] == "avengers123*"){
        // Función para INICIO DE SESIÓN 
        session_start();

        // Declaro mis variables de sesión
        $_SESSION["autentificado"] = true;   // es una variable que se hace por la funcion de arriba

        $_SESSION["usuario"] = $_POST["usuario_txt"];


        header("Location: archivo-protegido.php");
    } else{
        header("Location: index.php?error=si");      
            //junto con ?error=si para que verifique la sesión el usuario.
    }

?>