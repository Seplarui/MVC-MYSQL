<?php

error_reporting(E_ALL);
ini_set('display_errors','1');

class Profesor {
    
    
    //PROPIEDADES
    
    private $id;
    private $nombre;
    
    //CONSTRUCTORES
    
    public function __construct($id, $nombre) {
        
        $this->id=$id;
        $this->nombre=$nombre;
        
    }
    
    //MÉTODOS
    
    public function getId() {
        
        return $this->id;
        
    }
    
    public function setId($id) {
        
        $this->id=$id;
        
    }
    
    public function getNombre() {
        
        return $this->nombre;
        
    }
    
    public function setNombre($nombre) {
        
        return $this->interes;
    }
}
?>