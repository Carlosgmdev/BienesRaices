<?php

namespace App;

class ActiveRecord {

    //DataBase
    protected static $db;
    protected static $columnsDB = [];

    protected static $table = '';

    public static function setDB($database)
    {
        self::$db = $database;
    }

    //Errors
    protected static $errors = [];

    public function save() {
        if(!is_null($this->id)) {
            $this->update();
        } else {
            $this->create();
        }
    }

    public function create() {

        //Sanitize data
        $data = $this->sanitizeData();

        //insertar en la base de datos
        $query = "INSERT INTO " . static::$table . " (";
        $query .= join(', ', array_keys($data));
        $query .= ") VALUES ('";
        $query .= join("', '", array_values($data));
        $query .= "');";

        $result = self::$db->query($query);

        if($result) {
            header('Location: /bienes_raices/admin?result=1');
        }
    }

    public function update() {
        $data = $this->sanitizeData();
        $values = [];
        foreach ($data as $key => $value) {
            $values[] = "{$key}='{$value}'";
        }

       $query = "UPDATE " . static::$table . " SET ";
       $query .= join(', ',$values);
       $query .= " WHERE id = '".self::$db->escape_string($this->id)."'";
       $query .= " LIMIT 1;";

       $result = self::$db->query($query);

       if($result) {
        header('Location: /bienes_raices/admin?result=2');
       }
    }

    public function delete() {
    
        $query = "DELETE FROM " . static::$table . " WHERE id = ".self::$db->escape_string($this->id). " LIMIT 1;";
        $result = self::$db->query($query);

        $this->deleteImage();

        if($result) {
            header('Location: /bienes_raices/admin?result=3');
        }
    }

    public function data() {
        $data = [];
        foreach (static::$columnsDB as $column) {
            if ($column === 'id') continue;
            $data[$column] = $this->$column;
        }
        return $data;
    }

    public function sanitizeData() {
        $data = $this->data();
        $sanitized = [];
        foreach ($data as $key => $value) {
            $sanitized[$key] = self::$db->escape_string($value);
        }
        return $sanitized;
    }

    //subida de archivos
    public function setImage($image) {

        if (isset($this->id)) {
            $this->deleteImage();
        }

        if ($image) {
            $this->imagen = $image;
        }
    }

    public function deleteImage() {
        $fileExist = file_exists(IMAGES_FOLDER . $this->imagen);
        if ($fileExist) {
            unlink(IMAGES_FOLDER . $this->imagen);
        }
    }

    public static function getErrors() {
        return static::$errors;
    }

    public function validateData() {

        static::$errors = [];
        return self::$errors;
    }

    public static function all()
    {
        $query = 'SELECT * FROM ' . static::$table;

        $result = self::SQLConsult($query);

        return $result;
    }

    public static function limit($amount)
    {
        $query = 'SELECT * FROM ' . static::$table . ' LIMIT ' . $amount . ';';

        $result = self::SQLConsult($query);

        return $result;
    }

    public static function find($id)
    {
        $query = "SELECT * FROM " . static::$table . " WHERE id = ${id}";
        $result = self::SQLConsult($query);
        return array_shift($result);
    }

    public static function SQLConsult($query)
    {
        $result = self::$db->query($query);

        $arr = [];

        while ($reg = $result->fetch_assoc()) {
            $arr[] = static::createObject($reg);
        }

        $result->free();

        return $arr;
    }

    protected static function createObject($reg)
    {
        $object = new static;

        foreach ($reg as $key => $value) {
            if (property_exists($object, $key)) {
                $object->$key = $value;
            }
        }
        return $object;
    }

    public function sync($arr = [])
    {
        foreach ($arr as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
