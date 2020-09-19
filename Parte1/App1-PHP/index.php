<?php
    error_reporting(E_ALL ^ E_NOTICE);

    $op = $_GET["op"];
    switch($op){
        case 'Alta':
            $contenido = "PHP/Alta-contacto.php";
            $titulo = "Alta de contacto.";
        break;

        case 'Baja':
            $contenido = "PHP/Baja-contacto.php";
            $titulo = "Baja de contacto.";
        break;

        case 'Cambios':
            $contenido = "PHP/Cambios-contacto.php";
            $titulo = "Cambio de contacto.";
        break;

        case 'Consultas':
            $contenido = "PHP/Consultas-contacto.php";
            $titulo = "Consulta de contacto.";
        break;

        default:
        $contenido = "PHP/Home.php";
        $titulo = "Mis contactos v1";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mis-contactos.css">
    <!--Librería de JQUERY-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <!--MANDA A TRAER EL JQUERY DESDE QUE LO GUARDAMOS EN CASO DE QUE NO ENCUENTRE EL DE INTERNET (ES RECOMENDABLE)-->
    <script>
        !window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>")
    </script>
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="?op=Alta">Alta de contacto</a></li>
                <li><a class="cambio" href="?op=Baja">Baja de contacto</a></li>
                <li><a class="cambio" href="?op=Cambios">Cambios de contacto</a></li>
                <li><a class="cambio" href="?op=Consultas">Consultas de contacto</a></li>
            </ul>
        </nav>

        <section id="principal">
            <?php include($contenido); ?>
        </section>
    </section>
    
    
    <script src="JS/mis-contactos.js"></script>
</body>
</html>