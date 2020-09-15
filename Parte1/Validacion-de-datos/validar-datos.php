<?php
    $name = "Alfred";
    $password = "123";

    if(isset($_GET["enviar_hdn"])){     // si existe el atributo con nombre enviar_hdn existe entonces entra
        if($name == $_GET["name_txt"] && $password == $_GET["password_txt"]){
            echo "El nombre que ingresaste  por GET es: ".$_GET["name_txt"].
            "<br> el password que ingresaste por GET es: ".$_GET["password_txt"].
            "<br> el sexo que seleccionaste por GET es: ".$_GET["sex_rdo"].".";
        }else {
            header("Location: formulario.php?error=si");   //Sirve para estableber o redirigir el flujo de una página
            // SI LOS DATOS QUE INGRESO EN GET son similares, si me abre la pagina de validar, pero en caso que sean diferentes, 
            // entonces redirecciona otra vez a la pagina de formulario.php
        }
    }else if (isset($_POST["enviar_hdn"])){     // si existe el atributo con nombre enviar_hdn existe entonces entra
        if($name == $_POST["name_txt"] && $password == $_POST["password_txt"]){
            echo "El nombre que ingresaste  por POST es: ".$_POST["name_txt"].
            "<br> el password que ingresaste por POST es: ".$_POST["password_txt"].
            "<br> el sexo que seleccionaste por POST es: ".$_POST["sex_rdo"].".";
        }else {                
            header("Location: formulario.php?error=si");
        }
    }
?>