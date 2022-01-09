<?php include 'includes/templates/header.php'; ?>
    
    <main class="contenedor seccion">
        <h1>Contáctanos</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contácto">
        </picture>

        <h2>Llene le formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu dirección de correo electrónico">

                <label for="telefono">Teléfono</label>
                <input id="telefono" type="tel" placeholder="Tu teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" cols="30" rows="10"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Tu precio o presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>¿Cómo desea ser contactado?</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="Telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="Email" id="contactar-email">
                </div>
                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" value="Telefono" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
    include 'includes/templates/footer.php';
?>