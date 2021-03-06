<?php
    require '../../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    // Validar URL por ID Válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }
    var_dump($id);


    //base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    //Obtener los datos de la propiedad
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);

    //Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    //Arreglo con mensajes de error
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorId = $propiedad['vendedorId'];
    $imagenPropiedad = $propiedad['imagen'];


    //Ejecutar el código después de que el usuario envía el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado = mysqli_real_escape_string($db, date('Y/m/d'));

        //Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if (!$titulo) {
            $errores[] = "Debes añadir un título";
        };
        if (!$precio) {
            $errores[] = "El precio es obligatorio";
        };
        if (strlen($descripcion) < 50) {
            $errores[] = "La descripción es obligatoria y debe tener mínimo 50 caracteres";
        };
        if (!$habitaciones) {
            $errores[] = "Debes añadir la cantidad de habitaciones";
        };
        if (!$wc) {
            $errores[] = "Debes añadir la cantidad de baños de la propiedad";
        };
        if (!$estacionamiento) {
            $errores[] = "Debes añadir la cantidad de espacios de estacionamiento de la propiedad";
        };
        if (!$vendedorId) {
            $errores[] = "Elige un vendedor";
        };


        //Validar por tamaño (100mb máximo)

        $medida = 1000 * 1000;

        if($imagen['size'] > $medida) {
            $errores[] = "La imagen es muy pesada";
        }

        //Revisar que el arreglo de errores esté vacío

        if (empty($errores)) {

            //Crear carpeta
            $carpetaImagenes = '../../imagenes/';
            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';
            /**SUBIDA DE ARCHIVOS */

            if ($imagen['name']) {
                //Eliminar la imagen previa
                unlink($carpetaImagenes . $propiedad['imagen']);

                 //Generar un nombre único
                $nombreImagen = md5( uniqid( rand(), true ));

                //Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes .  $nombreImagen . ".jpg");
            } else {
                $nombreImagen = $propiedad['imagen'];
            }

            //Insertar en la base de datos

            $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, vendedorId = ${vendedorId} WHERE id = ${id}";

            //echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                //Redireccionar al usuario
                header('Location: /admin?resultado=2');
            }
        } else {

        }
    };

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Acutalizar propiedad</h1>

        <a href="/admin" class="boton boton-verde"> Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título propiedad" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpej, image/png, image/jpg" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small" alt="Imagen propiedad">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion;?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones;?>">;

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc;?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="0" max="9" value="<?php echo $estacionamiento;?>">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">--Seleccione--</option>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <option  <?php echo $vendedorId === $row['id'] ? 'selected' : ''; ?>
                        value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . " " . $row['apellido']?></option>
                    <?php endwhile; ?>
                </select>

                <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
            </fieldset>
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>