<?php   
    // $_GET y $_POST es una variable global de tipo arreglo ya reconocida por PHP
    if (isset($_GET["enviar_btn"])) {      // isset evalua si existe la variable
        echo "Los datos fueron enviados por el metodo GET, 
        los datos son: <br /><br />El nombre es: ".$_GET["nombre_txt"]."<br><br>El Password es: ".$_GET["password_txt"];
    } else if (isset($_POST["enviar_btn"])) {
        echo "Los datos fueron enviados por el metodo POST, 
        los datos son: <br /><br />El nombre es: ".$_POST["nombre_txt"]."<br><br>El Password es: ".$_POST["password_txt"];
    }

    /*  GET y POST van entre corchetes porque son un string */
?>