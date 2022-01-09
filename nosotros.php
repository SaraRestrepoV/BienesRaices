<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce acerca de nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/wep">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iste assumenda eligendi, odit dolorem soluta exercitationem praesentium consectetur possimus cupiditate rem itaque tempore rerum minus sit sunt optio dolor tempora.</p>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam officiis minus quidem, explicabo aut impedit dolore at ad ipsa. Quae illo, quibusdam laudantium consectetur fugit officia libero eum amet aliquid?</p>
            </div>
        </div>
    </main>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                   Aut reprehenderit, at autem minus quod ad, quibusdam illo,
                   magnam aspernatur sapiente qui blanditiis commodi aliquid
                   dicta ut perspiciatis odit vero recusandae.</p>
            </div>
        </div>
    </main>

    <?php
    incluirTemplate('footer');
?>