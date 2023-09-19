<?php 
    include 'includes/app.php';
    incluirTemplate('header');
?>
 
    <main class="contenedor contenido-centrado">
        <h1>Nuestro Blog</h1>
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
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="Texto Entrada Blog" loading="lazy">
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
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="Texto Entrada Blog" loading="lazy">
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
    </main>

<?php

incluirTemplate('footer');

?>