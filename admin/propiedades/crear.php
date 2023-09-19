<?php 
    require '../../includes/app.php';

    estaAutenticado();

    use App\Property;
    use App\Vendor;
    use Intervention\Image\ImageManagerStatic as Image;

    $propiedad = new Property();

    $vendedores = Vendor::all();

    //Array de errores
    $errors = Property::getErrors();


    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $propiedad = new Property($_POST['propiedad']); 

        $imageName = md5(uniqid(rand(), true)).".jpg";

        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImage($imageName);
        }

        $errors = $propiedad->validateData();
    

        if(empty($errors)) {
 
            if(!is_dir(IMAGES_FOLDER)) {
                mkdir(IMAGES_FOLDER);
            }

            $image->save(IMAGES_FOLDER.$imageName);

            $propiedad->save();
        } 
    }
    
    incluirTemplate('header');
?>
 
    <main class="contenedor seccion">
        <h1>Crear Propiedad</h1>
        <a href="/bienes_raices/admin" class="boton boton-verde">Volver</a>
        <?php foreach($errors as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form class="formulario" method="POST" action="/bienes_raices/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/form_property.php'; ?>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php

incluirTemplate('footer');

?>