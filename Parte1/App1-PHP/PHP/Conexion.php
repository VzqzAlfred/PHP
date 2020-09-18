<?php       // OTRA FORMA DE CONECTAR BD

    function conectarse(){
        $servidor="localhost";
        $usuario="root";
        $password="";
        $bd="mis_contactos";

        $conectar = new mysqli($servidor, $usuario, $password, $bd);

        return $conectar;
    }

    if($conexion = conectarse()){
        echo "BD conectada";
    }else{
        echo "ERROR";
    }



?>