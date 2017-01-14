<?php



include_once("Config.php");
include_once("Profesor.php");

class Modelo {
    
    protected $conexion;
    
    public function __construct($dbname,$dbuser,$dbpass,$dbhost) {
        
        $bdconexion=new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser,$dbpass);
        
        $this->conexion=$bdconexion;
        
    }
    
    public function setProfesor($profesor) {
        
        $consulta='INSERT INTO profesor(nombre) VALUES("'$profesor->getNombre().'");';
    }
}

