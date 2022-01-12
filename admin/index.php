<?php

    //Importar la conexión
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Escribit el Query

    //Consultar la DB


    //Muestra mensaje condicional
    $resultado = $_GET['resultado'];
    //Incluye el template del header
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>

        <?php if (intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>

        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!--Mostrar los resultados-->
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img src="/build/img/anuncio1.jpg" class="imagen-tabla"></td>
                    <td>$120000000</td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php 
    //Cerrar la conexión
    incluirTemplate('footer');
?>