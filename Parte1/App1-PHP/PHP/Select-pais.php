<?php
    include("Conexion.php");    //Incluimos el archivo de la conexion a la BD.
    
    
    // ordenar los países alfabeticamente de la tabla
    $consulta = "SELECT * FROM pais ORDER BY pais";

        // Las flechas indican como una instancia un ',' en JavaScript
    $ejecutar_consulta = $conexion->query($consulta);

        // es parecido al anterior con el while mysqli_fetch_array
    while($registro = $ejecutar_consulta->fetch_assoc()){
    //    $nombre_pais = utf8_encode($registro["pais"]);        POR SI APARECEN CARACTERES
        echo "<option value='".$registro["pais"]."'>".$registro["pais"]."</option>";
    }   
            // concatenamos el nombre del pais que hay en la BD

?>