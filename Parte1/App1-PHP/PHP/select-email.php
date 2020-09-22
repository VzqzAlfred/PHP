<?php
        //incluir el archivo de la conexión de la BD
    include ("Conexion.php");

        // Contruyo el query para traer los regustros en el select del HTML
    $consuta = "SELECT email FROM contactos ORDER BY email";

        // Ejecutar el query
    $ejecutar_consulta = $conexion->query($consuta);

        // Con un while consulto todos los registros generados de la consulta anterior
        // Contruyo las opciones del select de forma dinámica con los registros de la consulta
    while($registro = $ejecutar_consulta->fetch_assoc()){
                            // fetch permite ir recorriendo todos los registros d ela consulta de la BD
        echo "<option value='".utf8_encode($registro["email"])."'>".utf8_encode($registro["email"])."</option>";
    }               
                // utf8 para que no muestre caracteres extraños.
                // option porque como va  aparecer dentro de la caja de opciones tienne que aparecer como value y dentro de la etiqueta

    $conexion->close();
?>