<?php 
    // cuando enviamos archivos se genera una variable $_FILES
    // Lo cual esa genera 5 propiedades
    /*
        name: 
        type:
        tmp_name:           nombre temporal
        error:
        size:
    */
        // foreach()       Sirve para ir recorriendo las posicion de un arreglo    
        // Va a recorrer el archivo_fls y en cada $clave muestra el $valor que tiene
    foreach($_FILES["archivo_fls"] as $clave => $valor){
        echo "Propiedad: $clave --- Valor: $valor <br>";
    }

        // No es recomendable dejarlo a la vista, solo para que puedas verlo tú



                //Para acceder a la propiedad de nombre temporal
                // guardamos el tmp_name en la variable archivo
    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    
        //nombre de la carpeta a mandar, despues que archivo, 
    $destino = "Archivos/".$_FILES["archivo_fls"]["name"];


    // funcion permite subir archivos al servidor
    /*
        Necesita dos parametros:

            - El archivo termporal que se sube y
            - La ruta donde lo vamos a guardar
    */

    //Para subir todo tipo de archivos 
/*  move_uploaded_file($archivo,$destino);
    echo "Archivo subido :)";
*/

    // Para subir de un solo tipo de archivo
    if ($_FILES["archivo_fls"]["type"] == "text/plain"){
        move_uploaded_file($archivo,$destino);
        echo "Archivo subido :)";
    }else {
        echo "Solo se admiten subir archivos de tipo txt <br>
            <a href='Enviar-archivo.php'>REGRESAR!</a>";
    }
?>
