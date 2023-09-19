<?php

namespace App;

class Property extends ActiveRecord {

    protected static $table = 'propiedades';

    protected static $columnsDB = [
        'id',
        'titulo',
        'precio',
        'imagen',
        'descripcion',
        'habitaciones',
        'wc',
        'estacionamiento',
        'creado',
        'vendedorId'
    ];

    //Construct
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    public function __construct($args = []) {
        $this->id                   = $args['id'] ?? null;
        $this->titulo               = $args['titulo'] ?? '';
        $this->precio               = $args['precio'] ?? '';
        $this->imagen               = $args['imagen'] ?? '';
        $this->descripcion          = $args['descripcion'] ?? '';
        $this->habitaciones         = $args['habitaciones'] ?? '';
        $this->wc                   = $args['wc'] ?? '';
        $this->estacionamiento      = $args['estacionamiento'] ?? '';
        $this->creado               = date('Y/m/d');
        $this->vendedorId           = $args['vendedorId'] ?? '';
    }

    public function validateData() {

        if (!$this->titulo) {
            self::$errors[] = "Debes añadir un titulo";
        }

        if (!$this->precio) {
            self::$errors[] = 'El Precio es Obligatorio';
        }

        if (strlen($this->descripcion) < 50) {
            self::$errors[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        if (!$this->habitaciones) {
            self::$errors[] = 'El Número de habitaciones es obligatorio';
        }

        if (!$this->wc) {
            self::$errors[] = 'El Número de Baños es obligatorio';
        }

        if (!$this->estacionamiento) {
            self::$errors[] = 'El Número de lugares de Estacionamiento es obligatorio';
        }

        if (!$this->vendedorId) {
            self::$errors[] = 'Elige un vendedor';
        }

        if (!$this->imagen) {
            self::$errors[] = 'La imagen es obligatoria';
        }

        return self::$errors;
    }

}



