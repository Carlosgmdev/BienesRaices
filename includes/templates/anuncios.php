<?php

use App\Property;

if($_SERVER['SCRIPT_NAME'] === '/bienes_raices/anuncios.php') {
    $properties = Property::all();
} else {
    $properties = Property::limit(3);
}

?>


<section class="seccion contenedor">
    <h2>Casas Y Depas En Venta</h2>
    <div class="contenedor-anuncios">
        <?php foreach($properties as $property): ?>
            <div class="anuncio">
                <picture>
                    <source srcset="imagenes/<?php echo $property->imagen ?>" type="image/jpeg">
                    <img src="imagenes/<?php echo $property->imagen ?>" alt="anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3><?php echo $property->titulo ?></h3>
                    <p><?php echo $property->descripcion ?></p>
                    <p class="precio">$ <?php echo $property->precio ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                            <p><?php echo $property->wc ?></p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento" loading="lazy">
                            <p><?php echo $property->estacionamiento ?></p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="Icono Habitacion" loading="lazy">
                            <p><?php echo $property->habitaciones ?></p>
                        </li>
                    </ul>
                    <a href="/bienes_raices/anuncio.php?id=<?php echo $property->id; ?>" class="boton boton-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>