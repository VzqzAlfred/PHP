<?php
    // variable mensaje hecha en agregar-contacto.php
    if(isset($_GET["mensaje"])){    // Si existe un envio de mensaje por el método GET
        $mensaje = $_GET["mensaje"];
        echo "<br><span class='mensajes'>$mensaje</span><br>";
    }

?>