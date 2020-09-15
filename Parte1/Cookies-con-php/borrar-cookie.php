<?php
    // La ponemos como cuando la creamos
    /*
        - nombre de la cookie
        - el segundo valor siempre va a ir vacía porque no le ponemos un valor
        - le damos un tiempo negativo, y como no existen se cancela la cookie
    */
    setcookie("idioma_solicitado", "", time()-1,"/");

        // Literalmente no la estamos eliminando sino la estamos caducando        
?>

<a href="usar-cookie.php">REGRESAR!</a>