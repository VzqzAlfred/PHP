<?php
    
$email=$_POST["email_slc"];
include("Conexion.php");
                // WHERE para poner que vamos a eliminar ese contacto
$consulta = "DELETE FROM contactos WHERE email = '$email'";
$ejecutar_consulta = $conexion->query($consulta);

    if($ejecutar_consulta)
        $mensaje = "El contacto con el email <b>$email</b> ha sido eliminada.";
    else
        $mensaje = "El contacto no se pudo eliminar con el email: <b>$email</b>.";

$conexion->close();

header("Location: ../index.php?op=Baja&mensaje=$mensaje");
?>