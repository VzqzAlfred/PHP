<script>
    window.onload = function()
    {
        let lista = document.getElementById("contacto-lista");
        lista.onchange = seleccionarContacto;
    

        function seleccionarContacto(){
            window.location="?op=Cambios&contacto_slc="+lista.value;
                // Cuando haya un cambio en ese elemento del formulario, refresca el documento
        }
    }
</script>

<form id="cambio-contacto" name="cambio_frm" action="PHP/modificar-contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambios en el contacto.</legend>
        <div>
            <label for="contacto-lista">Contacto:</label>
            <select id="contacto-lista" class="cambio" name="contacto_slc" required> 
                <option value=""> - - - </option>
                <?php include("select-email.php"); ?>
            </select>
        </div>
        <?php
            if($_GET["contacto_slc"]!=null){
                
                $conexion2 =conectarse();
                $contacto = $_GET["contacto_slc"];
                $consuta_contacto = "SELECT * FROM contactos WHERE email = '$contacto'";
                
                $ejecutar_consulta_contacto = $conexion2->query($consuta_contacto);

                $registro_contacto = $ejecutar_consulta_contacto->fetch_assoc();
                            // fetch_assoc porque me trae u array asociativo
                include("PHP/cambio-form.php");
            }
            
            include("PHP/Mensajes.php");
        ?>
    </fieldset>
</form>