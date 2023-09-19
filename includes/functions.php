<?php 

define('TEMPLATES_URL', __DIR__.'/templates');
define('FUNCIONES_URL', __DIR__.'functions.php');
define('IMAGES_FOLDER', __DIR__.'/../imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL."/${nombre}.php";
};

function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: ../../login.php');
    }
}

function debug($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    exit;
}

//ESCAPAR EL HTML /SANITIZAR

function S($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function validateContentType($type) {
    $types = ['property', 'vendor'];
    return in_array($type, $types);
}

function showNotify($code) {
    $message = '';

    switch ($code) {
        case '1':
            $message = 'creado con exito';
            break;
        
        case '2': 
            $message = 'actualizado con exito';
            break;

        case '3':
            $message = 'eliminado con exito';
            break;
        default:
            $message = false;
            break;
    }

    return $message;
}