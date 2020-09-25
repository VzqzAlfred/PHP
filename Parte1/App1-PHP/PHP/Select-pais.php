<?php
    if(!$registro_contacto["pais"]){    // si no estamos en el modulo de cambios-contacto entonces, estamos en alta-contacto
        include("Conexion.php");    
                        //Incluimos el archivo de la conexion a la BD para que se vea en Alta
    }  
    /*Va en la condicional orque revisando el flujo de ir conectando a la BD es select-email y ya incluye la conexion
    y después va a select pais lo cual ya ahi podemos evitar que se conecte a la BD
    */

    // ordenar los países alfabeticamente de la tabla
    $consulta = "SELECT * FROM pais ORDER BY pais";

        // Las flechas indican como una instancia un ',' en JavaScript
    $ejecutar_consulta = $conexion->query($consulta);

        // es parecido al anterior con el while mysqli_fetch_array
    while($registro = $ejecutar_consulta->fetch_assoc()){

    $nombre_pais = $registro["pais"];        // utf8_encode()    POR SI APARECEN CARACTERES
    echo "<option value='$nombre_pais'";
        if(utf8_encode($nombre_pais) == $registro_contacto["pais"]){
            echo " selected";
        }
    echo ">$nombre_pais</option>";
    }    

            // concatenamos el nombre del pais que hay en la BD

?>