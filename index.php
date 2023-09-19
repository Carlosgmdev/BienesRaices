<?php 

    include 'includes/app.php';

    incluirTemplate('header', $inicio = true);

?>
 
    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur iure distinctio eum. Dolorum ratione nemo, quibusdam qui expedita quis doloremque commodi neque corrupti natus pariatur ut provident quod repellat assumenda.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur iure distinctio eum. Dolorum ratione nemo, quibusdam qui expedita quis doloremque commodi neque corrupti natus pariatur ut provident quod repellat assumenda.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur iure distinctio eum. Dolorum ratione nemo, quibusdam qui expedita quis doloremque commodi neque corrupti natus pariatur ut provident quod repellat assumenda.</p>
            </div>
        </div>
    </main>
    <?php include 'includes/templates/anuncios.php'; ?>
    <div class="ver-todas contenedor alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
    </div>
    <section class="imagen-contacto">
        <h2>Encuentra La Casa De Tus Sueños</h2>
        <p>Llena nuestro formulario y un asesor se contactara contigo en la brevedad.</p>
        <a href="contacto.php" class="boton-amarillo">CONTACTANOS</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza Para El Techo De Tu Casa</h4>
                        <p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
                        <p>Consejos para construir la terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia Para La Decoracion De Tu Hogar</h4>
                        <p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
                        <p>Maximiza el espacio y aspecto de tu hogar con esta guia completamente gratuita y al alcanze de tu mano tan solo con dar un click.</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Compre la casa de mis sueños, desde que la vi en la pagina web me encanto, ahora pude comprarla con mis ahorritos y debo decir que valio la pena, las habitaciones estan de huevos aunque esten bien perras caras.
                </blockquote>
                <p>- Carlos G.</p>
            </div>
        </section>
    </div>

<?php

incluirTemplate('footer');

?>