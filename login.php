<?php

    require 'includes/config/database.php';
    $db = conectarDB();
    //Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }
        if (!$password) {
            $errores[] = "La contraseña es obligatoria o no es válida";
        }
        if(empty($errores)) {
            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
            $resultado = mysqli_query($db, $query);

            if ($resultado->num_rows) {
                //Revisar si el password es correcto

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }


    //Incluir header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form method="POST" class="formulario">
            <fieldset>
                    <legend>Email y password</legend>

                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" placeholder="Tu dirección de correo electrónico" required>

                    <label for="password">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="Tu contraseña" required>
                </fieldset>

                <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

    <?php
    incluirTemplate('footer');
?>