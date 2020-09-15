<?php
    // Está función necesita varios parámetros
    /*
        1.  Como se va a llamar la cookie
        2.  Cual va a ser su valor
        3.  Tiempo de la cookie             ->  time()+86400    para que dure las 24 hrs
        4.  Directorio de la cooki
                - Para que la cookie funcione se tiene que especificar la ruta del directorio
                  en el cuarto parámetro con "/", se entiene que la cookie existira en todo el directorio del sitio
    */

    setcookie("idioma_solicitado",  $_GET["idioma"], time()+86400, "/");
    header("Location: usar-cookie.php");        // Mandamos el flujo de la página, ahí la vamos a mandar
?>