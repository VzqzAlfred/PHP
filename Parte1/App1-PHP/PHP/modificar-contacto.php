<?php
    /*
        Asigno a variables php los valores que vienen del formulario 
        como el campo dek email esta deshabilitado en el form.php no lo reconoce 
        por eso tengo que guardar su valor en un campo oculto. 
    */
    $email = $_POST["email_hdn"];
    $nombre = $_POST["nombre_txt"];
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiento_txt"];
    $telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];

include("Conexion.php");    

    // Verificamos que el usuario no exista previamente
    $consulta = "SELECT * FROM contactos WHERE email = '$email'";
    $ejecutar_consulta = $conexion->query($consulta);
        // num_reg trae el numero de registros que trajo la consulta, 1 es que si esta registrado, y 0 es que no existe
    $num_regs = $ejecutar_consulta->num_rows;
         
    if($num_regs == 1){
        /* Si la foto viene vacía asignamos el valor del botón oculto de la 
           foto que tiene el valor anterior a la búsqueda, sino subo la nueva 
           foto y remplazo el valor.
        */
        if(empty($_FILES["foto_fls"]["tmp_name"])){
            $imagen = $_POST["foto_hdn"];
        }else {
            // Se ejecuta la funciíon para subir la imagen 
            include("funciones.php");
            $tipo = $_FILES["foto_fls"]["type"];
            $archivo = $_FILES["foto_fls"]["tmp_name"];
            $imagen = subir_imagen($tipo,$archivo,$email);   
        }
       
     // Actualizo los datos a la BD.
     $consulta = "UPDATE contactos SET nombre='$nombre', sexo='$sexo', nacimiento='$nacimiento', telefono='$telefono', pais='$pais', imagen='$imagen' WHERE email='$email'";
     $ejecutar_consulta = $conexion->query(utf8_encode($consulta));      // utf8 por si el usuario pone acentos 

     if($ejecutar_consulta){
        $mensaje = "Se han hecho los cambios en los datos del contacto <b>$email</b> exitosamente.";
     }else {
        $mensaje = "<b>Error</b>, los datos en el contacto <b>$email</b> no se pudieron actualizar.";
     }


    }else {
        $mensaje = "No se pudieron hacer los cambios en los datos de contacto con el email <b>$email</b> porque no existe o esta duplicado.";
    }


$conexion->close();
header("Location: ../index.php?op=Cambios&mensaje=$mensaje")
?>