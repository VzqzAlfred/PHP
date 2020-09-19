;   // JQUERY
    // cuando el documento prende 'on' y ya este listo, se ejecuta la funcion 
$(document).on("ready", efectosMisContactos);

function efectosMisContactos(){
    $("#principal form").fadeIn(2000);   // hace que el elemento que está desaparecido aparezcan
}