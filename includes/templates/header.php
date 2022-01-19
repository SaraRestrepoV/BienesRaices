<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img class="logo-header" src="../../build/img/logo.svg" alt="Logotipo de bienes raíces">
                </a>
                <div class="mobile-menu">
                    <img src="../../build/img/barras.svg" alt="Icono menú para dispositivos móviles">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="../../build/img/dark-mode.svg" alt="Modo oscuro">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                
                
            </div> <!--Cierre de la barra-->
            <?php
            if($inicio) {
                echo "<h1>Venta de Casas y Apartamentos Exclusivos de Lujo</h1>";
            }
            
            ?>
        </div>
    </header>