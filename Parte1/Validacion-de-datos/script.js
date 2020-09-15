function validarDatosGET(){
    let verify = true
                        // entra al formulario de nombre de atributo valida_datos_get_frm

    if(!document.valida_datos_get_frm.name_txt.value){      // indico que si no hay datos en ese campo
        alert(`The field name is requiered...`)
        document.valida_datos_get_frm.name_txt.focus()  //focus hace que te pongas ese campo y no te deja cambiar a otro hasta que lo llenes
        verify = false
    }else if(!document.valida_datos_get_frm.password_txt.value){
        alert(`The field password is requiered...`)
        document.valida_datos_get_frm.password_txt.focus()
        verify = false                                                       // corchetes porque se llaman igual y 0 es el primero, que es el masculino o el 1 es el femenino               
    }else if (!document.valida_datos_get_frm.sex_rdo[0].checked && 
        !document.valida_datos_get_frm.sex_rdo[1].checked){
        alert(`The fiel sex is requiered...`)
        document.valida_datos_get_frm.sex_rdo[0].focus()
        verify = false
    }   

        // verify es para que si estan llenos y no tienen ninguno, entonces se envia el formulario
    if (verify){     
        document.valida_datos_get_frm.submit()
    }
}



function validarDatosPOST(){
    let verify = true
                      

    if(!document.valida_datos_post_frm.name_txt.value){      
        alert(`The field name is requiered...`)
        document.valida_datos_post_frm.name_txt.focus()  
        verify = false
    }else if(!document.valida_datos_post_frm.password_txt.value){
        alert(`The field password is requiered...`)
        document.valida_datos_post_frm.password_txt.focus()
        verify = false                                                     
    }else if (!document.valida_datos_post_frm.sex_rdo[0].checked && 
        !document.valida_datos_post_frm.sex_rdo[1].checked){
        alert(`The fiel sex is requiered...`)
        document.valida_datos_post_frm.sex_rdo[0].focus()
        verify = false
    }   

        
    if (verify){     
        document.valida_datos_post_frm.submit()
    }
}

    // La pagina recarga con window y onload para que al momento de hacer click en el boton, realiza la función
    window.onload = function(){
        document.getElementById("enviar-get").onclick = validarDatosGET;
        document.getElementById("enviar-post").onclick = validarDatosPOST;
    }
