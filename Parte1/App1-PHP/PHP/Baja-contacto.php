<form id="baja-contacto" name="baja_frm" action="PHP/eliminar-contacto.php" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Baja de Contacto.</legend>
        <div>
            <label for="email">Email: </label>  <!--email_slc es el que envia por el post a eliminar contacto-->
            <select id="email" class="cambio" name="email_slc" required>
                <option value="">- - -</option>
                <?php include("select-email.php"); ?>
            </select>
        </div>
        <div>
            <input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="Eliminar">
        </div>
        <?php include("PHP/Mensajes.php"); ?>
    </fieldset>
</form>