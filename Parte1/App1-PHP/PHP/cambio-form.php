<div>
    <label for="email">Email: </label>
    <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" value="<?php echo $registro_contacto["email"];?>" required>
</div>

<div>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" required>
</div>

<div>
    <label for="m">Sexo: </label>
    <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" required> <label for="m">Masculino</label>
    <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" required> <label for="f">Femenino</label>
</div>

<div>
    <label for="nacimiento">Fecha de nacimiento: </label>
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" required>
</div>

<div>
    <label for="telefono">Teléfono: </label>
    <input type="number" id="telefono" class="cambio" name="telefono_txt" title="Tu teléfono" placeholder="Escribe tu teléfono" required>
</div>

<div>
    <label for="pais">País: </label>
    <select name="pais_slc" id="pais" class="cambio" required>
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
        </div>
</div>

<div>
    <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Agregar">
</div>