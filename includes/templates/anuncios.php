<?php 
    //Importar la conexión
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();

    //Consultar
    $query = "SELECT * FROM propiedades LIMIT ${limite}";

    //Obtener resultados
    $resultado = mysqli_query($db, $query);
?>


<div class="contenedor-anuncios">
        <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">

            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']  . '.jpg' ?>" alt="Imagen anuncio propiedad">

                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']; ?></h3>
                    <p><?php echo $propiedad['descripcion']; ?></p>
                    <p class="precio"><?php echo $propiedad['precio']; ?></p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_wc.svg" alt="Icono cantidad de baños de la propiedad">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono cantidad de espacios para autos">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li>
                            <img class="iconos" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono cantidad de dormitorios">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>
                    <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--fin contenido-anuncio-->
            </div> <!--fin anuncio-->
            <?php endwhile; ?>

        </div> <!--Fin contenedor-anuncios-->

<?php

    //Cerrar la conexión
    mysqli_close($db);

?>