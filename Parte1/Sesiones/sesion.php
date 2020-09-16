<?php
    session_start();
    /*Evaluo que la sesion continue, verificando una de las variables creadas 
        en control.php, cuando está ya no coincida con su valor inicial se 
        redirije al archivo de salir.php
    */

    if(!$_SESSION["autentificado"]){    // si su valor el false, entonces redirije a salir.php
        header("Location: salir.php");
    }
?>
