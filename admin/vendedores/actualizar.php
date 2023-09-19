<?php

    require '../../includes/app.php';

    estaAutenticado();

    use App\Vendor;

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: ../');
    }

    $vendor = Vendor::find($id);

    $errors = Vendor::getErrors();

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $vendor->sync($_POST['vendor']);

        $errors = $vendor->validateData();

        if(empty($errors)) {
            
            $vendor->save();
        }
    }

    incluirTemplate('header');
    ?>
     
        <main class="contenedor seccion">
            <h1>Actualizar Vendedor(a)</h1>
            <a href="/bienes_raices/admin" class="boton boton-verde">Volver</a>
    
            <?php foreach($errors as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
            <form class="formulario" method="POST">
                <?php include '../../includes/templates/form_vendor.php'; ?>
                <input type="submit" value="Guardar Cambios" class="boton boton-amarillo">
            </form>
        </main>
    
    <?php
    
    incluirTemplate('footer');
    
    ?>