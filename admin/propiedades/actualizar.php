<?php

    require '../../includes/app.php';

    use App\Property;
    use App\Vendor;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /bienes_raices/admin');
    }

    //CONSULTAR DATOS DE LA PROPIEDAD
    $propiedad = Property::find($id);

    $vendedores = Vendor::all();

    //Array de errores
    $errors = Property::getErrors();

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $propiedad->sync($_POST['propiedad']);

        $errors = $propiedad->validateData();

        $imageName = md5(uniqid(rand(), true)).".jpg";

        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImage($imageName);
        }


        if(empty($errors)) {

            if($image) {
                $image->save(IMAGES_FOLDER.$imageName);
            }

            $propiedad->save();
        } 
    }
    
    incluirTemplate('header');
?>
 
    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>
        <a href="../index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errors as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        
        

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/form_property.php'; ?>
            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php

incluirTemplate('footer');

?>