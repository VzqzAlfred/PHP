<?php

    if(!$_COOKIE["idioma_solicitado"]){       // Se envia las variables de tipo cookie
        header("Location: Pedir-idioma.php");    // Si no existe la seleccion entonces mla mandamos a solicitar idioma
    } else if ($_COOKIE["idioma_solicitado"] == "es"){
        header("Location: spanish.php");
    } else if ($_COOKIE["idioma_solicitado"] == "en") {
        header("Location: ingles.php");
    }
?>