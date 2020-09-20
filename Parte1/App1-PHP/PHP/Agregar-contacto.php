<?php
    // el atributo name, es el que va a recibir si se enviaron los datos o no

    //Asigno a variables de PHP los valores que vienen de Alta contacto.php
    $email = $_POST["email_txt"];
    $nombre = $_POST["nombre_txt"];
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiendo_txt"];
    $telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];

    // Dependiendo el sexo ponemos una imagen predeterminada.
    $imagen_generica = ($sexo == 'M')?"img/pictures/amigo.png":"img/pictures/amiga.png"; 

    // Verificamos que no exista previmiante el email del usuario en la BD
    include("Conexion.php");
    $consulta = "SELECT * FROM contactos WHERE email = '$email'";
                // $email porque ahi guarde los correos en la BD

    $ejecutar_consulta = $conexion->query($consulta);

    // invocamos el método num_rows devuelve el numero de registro que trago esa consulta.
    $num_regs = $ejecutar_consulta->num_rows;


    // Si $num_regs es igual a 0, entonces insertamos los datos en la tabla, sino mandamos un mensaje que diga que el usuario existe.
    if ($num_regs == 0){
        //Inserto el registro a la BD
        // Se ejecuta la función para subir la imagen.
        include("funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];    // verificamos la propiedad de que tipo es la imagen

        $archivo = $_FILES["foto_fls"]["temp_name"];

        $se_subio_imagen = subir_imagen($tipo, $archivo, $email);  // funcion de funciones.php

        //Si al foto en el formulario viene vacia, entonces le asigno el valor de la imagen génerica.adjuntar_archivo
                // sino entonces el nombre de la foto que se subio.
        
        // empty evalua si una funcion esta vacía
        // si empty esta vacio, significa que el usuario no subio ninguna imagen
        $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

        
        // Ahora subimos el usuario a la BD

        $consulta = "INSERT INTO contactos (email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES(
            '$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen'
        )";
                                        // utf8 para no tener problema con caracteres.
        $ejecutar_consulta = $conexion->query(utf8_encode($consulta));

        if($ejecutar_consulta){
            $mensaje = "Se ha dado de alta al contacto con el email: <b>$email</b>";
        }else{
            $mensaje = "No se pudo dar de alta al contacto con el email: <b>$email</b>";
        }


    }else{
        $mensaje = "No se pudo dar de alta al contacto: '<b>$email</b>' dado que ya existe.";

    }

    $conexion->close();

    header("Location: ../index.php?op=alta&mensaje=$mensaje");
    // Una vez registrado se regresa al formulario de agregado o erro como mensaje
?>