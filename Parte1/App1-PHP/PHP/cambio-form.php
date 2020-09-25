<!--
    Los $registro_contacto[""]
    entre comillas, son los nombres que hay en la BD, porque de ahi los estamos adquiriendo
-->
<div>
    <label for="email">Email: </label>
    <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" value="<?php echo $registro_contacto["email"];?>" disabled required>
                                                                                                                  <!--disable porque no se toca el email por ser llave primaria-->
    <input type="hidden" name="email_hdn" value="<?php echo $registro_contacto["email"]; ?>">   <!--Realizamos este oculto para que al momento de enviarse como le pusimos disable se envia vacío, y lo hacemos para que ya no se envie vacío-->
</div>

<div>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" value="<?php echo $registro_contacto["nombre"];?>" required>
</div>

<div>
    <label for="m">Sexo: </label>
    <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" <?php if($registro_contacto["sexo"]=="M"){echo "checked";} ?> required> <label for="m">Masculino</label>
    <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" <?php if($registro_contacto["sexo"]=="F"){echo "checked";} ?> required> <label for="f">Femenino</label>
</div>

<div>
    <label for="nacimiento">Fecha de nacimiento: </label>
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" value="<?php echo $registro_contacto["nacimiento"];?>" required>
</div>

<div>
    <label for="telefono">Teléfono: </label>
    <input type="number" id="telefono" class="cambio" name="telefono_txt" title="Tu teléfono" placeholder="Escribe tu teléfono" value="<?php echo $registro_contacto["telefono"];?>" required>
</div>

<div>
    <label for="pais">País: </label>
    <select name="pais_slc" id="pais" class="cambio" value="<?php echo $registro_contacto["pais"];?>" required>
        <option value="">- - -</option>
            <?php   // vamos a traer los paises de ese documento haciendo ahi las consultas para que aparezcan
                include("Select-pais.php");
            ?>
    </select>
</div>

<div>
    <label for="foto">Foto: </label>
        <div class="adjuntar_archivo cambio">
            <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
            <input type="hidden" name="foto_hdn" value="<?php echo $registro_contacto["imagen"]; ?>">
        </div>
    <div>
        <img src="<?php echo "img/pictures/".$registro_contacto["imagen"]; ?>" >
    </div>
         
</div>

<div>
    <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Agregar">
</div>