<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad en venta">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="iconos" loading="lazy" src="build/img/icono_wc.svg" alt="Icono cantidad de baños de la propiedad">
                    <p>3</p>
                </li>
                <li>
                    <img class="iconos" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono cantidad de espacios para autos">
                    <p>3</p>
                </li>
                <li>
                    <img class="iconos" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono cantidad de dormitorios">
                    <p>5</p>
                </li>
            </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non arcu pretium, finibus leo vel, aliquam nisi. Phasellus rhoncus, ex lobortis volutpat convallis, ante leo porttitor leo, sit amet tristique quam diam id erat. Praesent vel lorem pretium, efficitur massa nec, efficitur nulla. Nulla euismod bibendum mi vitae lobortis. Aenean sit amet ultricies diam. Duis tempor congue sodales. Ut aliquam, nulla malesuada commodo lobortis, sem nisi elementum justo, sit amet luctus felis dui id urna. Fusce cursus nibh maximus sapien mollis, id ultricies dolor sollicitudin. Curabitur aliquam ac leo sit amet luctus.

                    Sed gravida purus a odio laoreet, eget dapibus felis vestibulum. Integer semper ultrices magna in laoreet. Phasellus eu urna id metus pharetra ultricies at sed elit. Nullam facilisis augue turpis, nec mattis risus placerat condimentum. Vestibulum quis ex et lorem tristique lobortis eget eu magna.</p>
        </div>
    </main>

    <?php
    include 'includes/templates/footer.php';
?>