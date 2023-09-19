<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'root', 'bienes_raices');
    if(!$db){
        echo "Error al conectar a la base de datos";
        exit;
    }
    return $db;
}