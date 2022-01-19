<?php
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('location: /');
    }

    //Importar la conexión
    require 'includes/config/database.php';
    $db = conectarDB();
    
    //Consultar
    $query = "SELECT * FROM propiedades WHERE id = ${id}";

    //Obtener resultado
    $resultado = mysqli_query($db, $query);

    if(!$resultado->num_rows) {
        header('Location: /');
    }

    $propiedad = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>

            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']  . '.jpg' ?>" alt="Imagen de la propiedad en venta">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio']; ?></p>
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
                <p><?php echo $propiedad['descripcion']; ?></p>
        </div>
    </main>

<?php
    mysqli_close($db);

    incluirTemplate('footer');
?>