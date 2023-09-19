<?php

    require '../../includes/app.php';

    estaAutenticado();

    use App\Vendor;

    $vendor = new Vendor;

    $errors = Vendor::getErrors();

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $vendor = new Vendor($_POST['vendor']);

        $errors = $vendor->validateData();

        if(empty($errors)) {
            
            $vendor->save();
        }

    }

    incluirTemplate('header');
    ?>
     
        <main class="contenedor seccion">
            <h1>Registro De Vendedor(a)</h1>
            <a href="/bienes_raices/admin" class="boton boton-verde">Volver</a>
    
            <?php foreach($errors as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
            <form class="formulario" method="POST" action="/bienes_raices/admin/vendedores/crear.php">
                <?php include '../../includes/templates/form_vendor.php'; ?>
                <input type="submit" value="Registrar Vendedor(a)" class="boton boton-amarillo">
            </form>
        </main>
    
    <?php
    
    incluirTemplate('footer');
    
    ?>