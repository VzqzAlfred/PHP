<?php
    /*                   PASOS PARA CONECTAR UNA BD CON PHP
    
    1. Conectarme a la BD, 'mysqli_connect()'  está necesita 4 parámetros.

        1. Mi servidor es el localhost,
        2. El usuario es el root por ser XAMPP, 
        3. El usuario root no lleva password, por lo que lo dejamos vacío,
        4. Y el nombre de la BD
*/                                                
                                                            // or die() es una función que mata la ejecución y nos pone en pantalla un mensaje
    $conexion = mysqli_connect("localhost", "root", "", "mis_contactos")or die("No se pudo conectar con el servidor de BD.");
    echo "Se ha conectado exitosamente la BD. :D<br><br>";


 
//  2. Comprobar que la BD ha sido conectada exitosamente.
    if (mysqli_query($conexion, "SELECT DATABASE()")) {
        echo "BD 'mis_contactos' se ha seleccionado exitosamente.<br><br>";
    } else {
        echo "La Base de Datos 'mis_contactos' no pudo conectarse correctamente.";
    }



//  3. Crear una consulta SQL

    $consulta = "SELECT * FROM pais";



/*  4. Ejecutar la consulta SQL
        mysqli_query  necesita 2 parámetros
            1. la conexion a la BD
            2. la consulta
*/        
    $ejecutar_consulta = mysqli_query($conexion, $consulta) or die ("No se pudo ejecutar la consulta en la BD");
    echo "Se ejecutó la consulta SQL. <br><br>";
    


//  5. Mostramos el resultado de la consulta, dentro un ciclo y una variable, 
//  voy a ingresar la funcion mysqli_fetch_array

    while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
        echo "<strong>".$registro["id_pais"]."</strong>"." - "."<i>".$registro["pais"]."</i><br>";
    }

    
//  6. Cerrar la base de datos.
    mysqli_close($conexion)or die("Ha ocurrido un error al cerrar la BD.");
    echo "<p style='text-align: center; font-size: 2.5em; color: purple;'>Se ha cerrado exitosamente la BD.</p>";
?>