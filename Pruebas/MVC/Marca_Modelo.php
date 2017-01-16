<?php


//error_reporting(E_ALL);
//ini_set('display_errors','1');

class Marca {
    
    
    //PROPIEDADES
    
    private $id;
    private $nombre;
    
    //CONSTRUCTOR
    
      public function __construct($id,$marca) {
        $this->id=$id;
        $this->marca=$marca;
    }
    
    //MÉTODOS
    
    function getId() {
        return $this->id;
    }

    function getMarca() {
        return $this->marca;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

        
    
}
