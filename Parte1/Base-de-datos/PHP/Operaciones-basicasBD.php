<?php
    $conexion = mysqli_connect("localhost", "root", "", "mis_contactos")or die("No se pudo conectar a la BD.");
    echo "Se ha conectado correctamente a la BD :D";


    echo "<h1 style='text-align: center; color: purple'>Las 4 operaciones Básicas de una Base de Datos</h1>";
    echo "<h2 style='margin-left:5em; color: red;'><i>1. INSERCIÓN DE DATOS</i></h2>";


    /* Vamos a insertar datos a la BD.
        
            INSERT INTO nombre_tabla (campos) VALUES (valores_en_los_campos)
    */ 

        // Los VARCHAR, DATE, CHAR van entre comillas, siempre, los INT no.
            // las fechas de naciemiento se agregan: 'año-mes-dia'
            // Y en telefono se agrega 52 por que es LADA SIEMPRE.
            // CUIDADO CON LOS ACENTOS

    $consulta = "INSERT INTO contactos (email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES (
        'shadow-fenix96@hotmail.com','Alfredo','M','1996-03-22','525584571782','México','alfred.png'
    )";


    // Ejecutamos las consulta

    $ejecutar_consulta = mysqli_query($conexion, $consulta);
    echo "Se agrego exitosamente los datos a la tabla contactos de la BD.";

    // Para verificar que se hallan insertado correctamente ingresa al PHPMyAdmi




    //      ELIMINACIÓN DE DATOS

    echo "<h2 style='margin-left:5em; color: red;'><i>2. ELIMINACIÓN DE DATOS</i></h2>";
        
        //  DELETE FROM nombre_tabla WHERE campo = valor
            // asi solo elimina un solo registro
                                                       // el valor va entre '' 
    $consulta = "DELETE FROM contactos WHERE email = 'shadowfenix96@hotmail.com'";

    //  Ahora ejecutamos la consulta

    $ejecutar_consulta = mysqli_query($conexion, $consulta);
        echo "Los datos se han eliminado.";




    //          MODIFICACIÓN DE DATOS.

    echo "<h2 style='margin-left:5em; color: red;'><i>3. MODIFICACIÓN DE DATOS.</i></h2>";
        
        //  UPDATE nobre_tabla SET nombre_de_campo = valor_de_campo_nuevo, otro_campo = otro_valor_nuevo, WHERE campo = viejo_valor;

    $consulta = "UPDATE contactos SET email = 'alfred.vzqz96@outlook.com', nombre = 'Chato', imagen = 'chato.jpg' WHERE email = 'shadow-fenix96@hotmail.com'";

    $ejecutar_consulta = mysqli_query($conexion, $consulta);
        echo "Se han actualizado los datos de manera correcta.<br>";



    //          CONSULTA DE DATOS AGREGADO (BÚSQUEDA)          
    echo "<h2 style='margin-left:5em; color: red;'><i>4. CONSULTA(búsqueda) DE DATOS</i></h2>";
    
    // SELECT * FROM nombre_tabla WHERE campo = valor;

    $consulta = "SELECT * FROM contactos WHERE email = 'alfred.vzqz96@outlook.com'";

    $ejecutar_consulta = mysqli_query($conexion, $consulta);
    
    echo "<h3 style='margin-left: 25px; color: blue;'>Consulta que trae un solo registro</h3>";

    while($registro = mysqli_fetch_array($ejecutar_consulta)){
        echo $registro["email"]." ----- ";
        echo $registro["nombre"]." ----- ";
        echo $registro["sexo"]." ----- ";
        echo $registro["nacimiento"]." ----- ";
        echo $registro["telefono"]." ----- ";
        echo $registro["pais"]." ----- ";
        echo $registro["imagen"]."<br><br>";
    }



    $consulta = "SELECT * FROM contactos";
    $ejecutar_consulta = mysqli_query($conexion, $consulta);
    echo "<h3 style='margin-left: 25px; color: blue;'>Consulta que trae <strong>TODOS</strong> los registros</h3>";

    while($registro = mysqli_fetch_array($ejecutar_consulta)){
        echo $registro["email"]." ----- ";
        echo $registro["nombre"]." ----- ";
        echo $registro["sexo"]." ----- ";
        echo $registro["nacimiento"]." ----- ";
        echo $registro["telefono"]." ----- ";
        echo $registro["pais"]." ----- ";
        echo $registro["imagen"]."<br><br>";
    }


    mysqli_close($conexion);
    echo "<h3 style='text-align: center;'>La Base de Datos se ha cerrado exitosamente   :D</h3>";
?>

