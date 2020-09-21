<?php
/* 
    El parámetro de $extension determina que tipo de imagen no se borrará
    por ejemplo si es jpg significa que la imagen con extensión .jpg se queda 
    en el servidor y si existen imagénes con el mismo nombre, pero con extensión 
    png o gif se eliminarán, con está función evito tener imagenés duplicadas
    con distinta extensiones para cada perfil la función 'file_exists' evalúa si un
    archivo existe y la función 'unlink' borra un archivo del servidor. 
*/
    
function borrar_imagenes_repetidas($ruta, $extension){
    switch($extension){
        case ".jpg":
            if(file_exists($ruta.".png")){
                unlink($ruta.".png");
            }
            if(file_exists($ruta.".gif")){
                unlink($ruta.".gif");
            }
        break;

        case ".gif":
            if(file_exists($ruta.".png")){
                unlink($ruta.".png");
            }
            if(file_exists($ruta.".jpg")){
                unlink($ruta.".jpg");
            }
        break;

        case ".png":
            if(file_exists($ruta.".jpg")){
                unlink($ruta.".jpg");
            }
            if(file_exists($ruta.".gif")){
                unlink($ruta.".gif");
            }
        break;
    }
}

// Función para subir la imagen del perfil de usuario.
    function subir_imagen($tipo, $imagen, $email){
    /*
        strstr($cadena1, $cadena2)  sirve para evaluar si en la primer cadena de texto 
        existe la segunda cadena de texto.
        Si dentro del tipo del archivo se encuentra la palabra image
        significa que el archivo es una imagen.
    */

        if(strstr($tipo, "image")){
            //Si el archivo que sube el usuario es de tipo image, entonces se evalua la condicion
            
            // Para saber de que tipo de extensión es la imagen.
            if(strstr($tipo, "jpeg")){  // Si la imagen dice jpeg
                $extension = ".jpg";
            }else if (strstr($tipo, "gif")){
                $extension = ".gif";
            }else if(strstr($tipo, "png")){
                $extension = ".png";
            }


            // Para saber si la imagen tiene el ancho correcto que es de 420px
            $tam_img = getimagesize($imagen);
                // este devuelve en un arreglo posicional el ancho y el alto de la imagen
            $ancho_img = $tam_img[0]; // cero porque la primer posicion me da el valor del ancho de la imagen.
            $alto_img= $tam_img[1];   // uno es el alto 
                
            $ancho_img_deseado = 420;   // el maximo ancho en px de subir la img 

                // Si la imagen es mayor en su ancho que 420, reajusto su tamaño.
            if ($ancho_img > $ancho_img_deseado){
                //reajustamos.
                /* Por una regla de 3 obtenemos el alto de la imagen de manera proporcional 
                    al ancho nuevo que sera de 420
                */
                $nuevo_ancho_img = $ancho_img_deseado;
                $nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;

                // Creo una imagen en color real con las nuevas dimensiones
                $imagen_reajustada = imagecreatetruecolor($nuevo_ancho_img, $nuevo_alto_img);

                // Creo una imagen basada en la original, dependiendo de su extensión es el tipo que creare.
                
                switch($extension){
                    case ".jpg":
                        $img_original = imagecreatefromjpeg($imagen);
                        // Reajusto la imagen nueva con respecto a la original.
                        imagecopyresampled($imagen_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);

                        //Guardo la imagen reescalada en el servidor.
                        $nombre_img_ext = "../img/pictures/".$email.$extension;
                        $nombre_img = "../img/pictures/".$email;
                        imagejpeg($imagen_reajustada, $nombre_img_ext, 100);
                                    // 100 es un parametro para que la imagen tenga la calidad de 100%
                        
                        // Ejecuto la función para borrar posibles imagenes dobles para el perfil.
                    borrar_imagenes_repetidas($nombre_img,".jpg");
                    break;

                    case ".gif":
                        $img_original = imagecreatefromgif($imagen);
                        // Reajusto la imagen nueva con respecto a la original.
                        imagecopyresampled($imagen_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);

                        //Guardo la imagen reescalada en el servidor.
                        $nombre_img_ext = "../img/pictures/".$email.$extension;
                        $nombre_img = "../img/pictures/".$email;
                        imagegif($imagen_reajustada, $nombre_img_ext, 100);
                        
                        // Ejecuto la función para borrar posibles imagenes dobles para el perfil.
                    borrar_imagenes_repetidas($nombre_img,".gif");
                    break;

                    case ".png":
                        $img_original = imagecreatefrompng($imagen);
                        imagecopyresampled($imagen_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);

                        $nombre_img_ext = "../img/pictures/".$email.$extension;
                        $nombre_img = "../img/pictures/".$email;
                        imagepng($imagen_reajustada, $nombre_img_ext, 100);

                        borrar_imagenes_repetidas($nombre_img,".png");
                    break;
                }
                
            }else {
                // no se reajusta y se sube
                // Guardo la ruta que tendra en el servidor la imagen
                $destino = "../img/pictures/".$email.$extension;
                    // lo guardamos en la carpeta img/pictures
                
                // Se sube la foto.
                move_uploaded_file($imagen, $destino) or die ("No se pudo subir la imagen.");
                    // el or die por cuestiones que se pierda la conexión.
                
                // Ejecuto la función para borrar posibles imagenes dobles para el perfil.
                $nombre_img = "../img/pictures/".$email;
                borrar_imagenes_repetidas($nombre_img, $extension);
                            // extension porque es la que quiero conservar
            }

            // Si todo sale bien: Asigno el nombre de la foto que se guardará en la BD como cadena de texto
            $imagen = $email.$extension;
        return $imagen;
        }else{
            return false;
        }
    }
?>