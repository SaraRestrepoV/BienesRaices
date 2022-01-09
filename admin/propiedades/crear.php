<?php
    //base de datos

    require '../../includes/config/database.php';

    $db = conectarDB();

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

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="baños">Baños:</label>
                <input type="number" id="baños" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select>
                    <option value="1">Karen</option>
                    <option value="2">Sara</option>
                </select>

                <input type="submit" value="Crear Propiedad" class="boton boton-verde">
            </fieldset>
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>