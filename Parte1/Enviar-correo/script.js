function validarForm(){
    let verificar = true;
    let expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;    // Todo esto valida un formato de correo electrónico
    
    if(!document.mail_frm.de_txt.value){  //si no hay nada en la caja De:
        alert("El campo 'De' es requerido.");
        document.mail_frm.de_txt.focus();
        verificar = false;
    } else if (!expRegEmail.exec(document.mail_frm.de_txt.value)){   //exc() evalua una expresion regular
        alert("El campo 'De' no es válido.");
        document.mail_frm.de_txt.focus();
        verificar = false;
    } else if (!document.mail_frm.para_txt.value){
        alert("El campo 'Para' es requerido.");
        document.mail_frm.para_txt.focus();
        verificar = false;
    } else if (!expRegEmail.exec(document.mail_frm.para_txt.value)){     //exc() evalua una expresion regular
        alert("El campo 'Para' no es válido.");
        document.mail_frm.para_txt.focus();
        verificar = false;
    } else if (!document.mail_frm.asunto_txt.value){
        alert("El campo del 'Asunto' es requerido.");
        document.mail_frm.asunto_txt.focus();
        verificar = false;
    } else if (!document.mail_frm.mensaje_txa.value){
        alert("El campo del 'Mensaje' es requerido.");
        document.mail_frm.mensaje_txa.focus();
        verificar = false;
    } else if (!document.mail_frml.archivo_fls.value){
        alert("El campo 'Adjuntar archivo' es requerido.");
        document.mail_frm.archivo_fls.focus();
        verificar = false;
    }

    if(verificar){
        document.mail_frm.submit(); // En caso de que todos los campos se cumplan, entonces se envía
    }
}

    window.onload = function(){     
        document.mail_frm.enviar_btn.onclick = validarForm
    }