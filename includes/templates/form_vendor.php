<fieldset>
    <legend>
        Información General
    </legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendor[nombre]" placeholder="Nombre del vendor(a)" value="<?php echo S($vendor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="vendor[apellido]" placeholder="Apellido del vendor(a)" value="<?php echo S($vendor->apellido); ?>">

    <label for="telefono">Telefono:</label>
    <input type="number" id="telefono" name="vendor[telefono]" placeholder="Telefono del vendor(a)" value="<?php echo S($vendor->telefono); ?>">

</fieldset>
