<?php
    //REQUERIR DB
    require 'includes/config/database.php';
    $db = conectarDB();

    //VALIDAR FORMULARIO

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db,filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)) {
            //REVISAR SI EL USUARIO EXISTE
            $query = "SELECT * FROM usuarios WHERE email = '${email}';";
            $resultado = mysqli_query($db,$query);

            if($resultado -> num_rows) {
                //REVISAR SI EL PASSWORD ES CORRECTO
                $usuario = mysqli_fetch_assoc($resultado);

                //VERIFICAR PASSWORD
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    //EL USUARIO ESTA AUTENTICADO
                    session_start();

                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: /admin/index.php');
                    
                } else {
                    $errores[] = 'El password es incorrecto';
                }
            } else {
                $errores[] = 'El usuario no existe';
            }
        }
    }


    //INCLUIR HEADER
    include 'includes/functions.php';
    incluirTemplate('header');
?>
 
    <main class="contenedor seccion">
        <h1>Iniciar Sesión</h1>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" class="formulario contenido-centrado">
        <fieldset>
                <legend>Email Y Password</legend>

                <label for="email">Email</label>
                <input id="email" type="email" name="email"  placeholder="Tu Email" required>

                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Tu Password" required>

                <input type="submit"  value="Iniciar Sesión" class="boton boton-verde">
            </fieldset>
        </form>
    </main>

<?php

incluirTemplate('footer');

?>