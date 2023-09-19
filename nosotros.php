<?php 
    include 'includes/app.php';
    incluirTemplate('header');
?>
 
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Imagen Nosotros" loadind="lazy">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem zipsum dolor sit amet, consectetur adipisicing elit. Vero expedita ipsum delectus! Autem nisi deleniti, voluptas, quae alias error possimus tenetur omnis atque eos ipsam porro distinctio, aliquam quisquam voluptatem veritatis. Tempora dolore sunt facere inventore mollitia voluptates provident placeat ex repellendus maiores earum obcaecati esse ipsam facilis hic sit, voluptatibus doloremque exercitationem assumenda quidem vitae qui delectus, laudantium repudiandae! Recusandae sapiente iusto iure praesentium saepe dolorem aliquid? Eaque unde cupiditate.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aut cum magni perspiciatis perferendis assumenda labore quam repellendus obcaecati, ipsum esse iusto tenetur voluptate debitis nihil maxime blanditiis adipisci temporibus. Minima quisquam sunt repudiandae rem hic voluptate magni tempora maxime porro ratione ex molestiae eius sequi odit, quidem ab iure?
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
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
    </section>

<?php

incluirTemplate('footer');

?>