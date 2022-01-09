<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde"> Volver</a>

        <form class="formulario" action="">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Título propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpej, image/png">
            </fieldset>
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>