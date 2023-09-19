<?php

namespace App;

class Vendor extends ActiveRecord {

    protected static $table = 'vendedores';

    protected static $columnsDB = ['id', 'nombre', 'apellido', 'telefono'];

    //Construct
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = []) {
        $this->id                   = $args['id'] ?? null;
        $this->nombre               = $args['nombre'] ?? '';
        $this->apellido             = $args['apellido'] ?? '';
        $this->telefono             = $args['telefono'] ?? '';
    }

    public function validateData() {

        if (!$this->nombre) {
            self::$errors[] = "El nombre es obligatorio";
        }

        if (!$this->apellido) {
            self::$errors[] = "El apellido es obligatorio";
        }

        if (!$this->telefono) {
            self::$errors[] = "El telefono es obligatorio";
        }

        if (!preg_match('/[0-9]{10}/', $this->telefono)) {
            self::$errors[] = "debes introducir un numero de telefono valido";
        }

        return self::$errors;
    }

}