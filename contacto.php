<?php 
    include 'includes/functions.php';
    incluirTemplate('header');
?>
 
    <main class="contenedor">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="buid/img/destacada3.jpg" alt="Imagen Contacto" loading="lazy">
        </picture>
        <h2>Llene El Formulario De Contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre">

                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu E-mail">

                <label for="telefono">Teléfono</label>
                <input id="telefono" type="tel" placeholder="Tu Teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>
                    Informacion sobre la propiedad
                </legend>
                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-Seleccione-</option>
                    <option value="vende">Vende</option>
                    <option value="compra">Compra</option>
                </select>
                <label for="presupuesto">Precio O Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu Precio O Presupuesto">
            </fieldset>
            <fieldset>
                <legend>
                    Preferencias De Contacto
                </legend>
                <p>Como Desea Ser Contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" id="contactar-email" value="email">
                </div>
                <p>Si elijio telefono, elija la fecha y hora para ser contactado</p>

                <label for="fecha">Fecha:</label>
                <input id="fecha" type="date">

                <label for="hora">Hora:</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php

incluirTemplate('footer');

?>