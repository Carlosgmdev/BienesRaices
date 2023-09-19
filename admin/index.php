<?php
require '../includes/app.php';

use App\Property;
use App\Vendor;

//VERIFICAR AUTENTICACION
estaAutenticado();

$propiedades = Property::all();
$vendedores = Vendor::all();

//INCLUIR UN TEMPLATE
incluirTemplate('header');

//MOSTRAR UN MENSAJE CONDICIONAL
$result = $_GET['result'] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];

    if($id) {

        $type = $_POST['type'];

        if(validateContentType($type)) {

            if($type === 'property') {

                $propiedad = Property::find($id);
                $propiedad->delete();

            } else if($type  === 'vendor') {

                $vendedor = Vendor::find($id);
                $vendedor->delete();
    
            }
        }
    }
}

?>

<main class="contenedor seccion">
    <h1>Administrador De Bienes Raices</h1>

    <?php
    
    $message = showNotify($result);

    if($message): ?>
        <p class="alerta exito"><?php echo S($message) ?></p>
    <?php endif; ?>
   

    <a href="../admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    <a href="../admin/vendedores/crear.php" class="boton boton-amarillo">Nuevo(a) Vendedor</a>

    <h2>Propiedades</h2>

    <table class="propiedades">
        <!--MOSTRAR INFORMACION-->
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propiedades as $propiedad) : ?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo; ?></td>
                    <td> <img src="/bienes_raices/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"> </td>
                    <td>$ <?php echo $propiedad->precio; ?></td>
                    <td>
                        <a href="/bienes_raices/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="type" value="property">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>

    <table class="propiedades">
        <!--MOSTRAR INFORMACION-->
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores as $vendedor) : ?>
                <tr>
                    <td><?php echo $vendedor->id; ?></td>
                    <td><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                    <td><?php echo $vendedor->telefono; ?></td>
                    <td>
                        <a href="/bienes_raices/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                            <input type="hidden" name="type" value="vendor">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php

incluirTemplate('footer');

?>