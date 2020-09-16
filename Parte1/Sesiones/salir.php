<?php   
    // Para trabajar con sesiones, primero tenemos que poner session_star(), que es inicializarla
    session_start();

    session_destroy();    // Para cerrarla
    
    header("Location: index.php");
?>