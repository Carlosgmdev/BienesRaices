<?php 
    include 'includes/app.php';

    use App\Property;

    incluirTemplate('header');

     $id = $_GET['id'];
     $id = filter_var($id, FILTER_VALIDATE_INT);

     if(!$id) {
        header('Location: /bienes_raices/');
     }

     $property = Property::find($id);

    
?>

    <main class="contenedor seccion contenido-centrado">
        
        <h1>
            <?php echo $property->titulo; ?>
        </h1>
        <picture>
            <source srcset="/bienes_raices/imagenes/<?php echo $property->imagen; ?>" type="image/jpeg">
            <img src="/bienes_raices/imagenes/<?php echo $property->imagen; ?>" alt="Imagen De La Propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$ <?php echo $property->precio; ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p><?php echo $property->wc; ?></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento" loading="lazy">
                    <p><?php echo $property->estacionamiento; ?></p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="Icono Habitacion" loading="lazy">
                    <p><?php echo $property->habitaciones; ?></p>
                </li>
            </ul>
            <p>
                <?php echo $property->descripcion; ?>
            </p>

        </div>
    </main>

<?php

incluirTemplate('footer');

?>