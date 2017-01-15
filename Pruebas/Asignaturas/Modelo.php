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
        
       $consulta = 'INSERT INTO profesor (nombre) VALUES ("' .$profesor->getNombre() . '");';
       
       echo $consulta."<br/>";
       
       $result=$this->conexion->prepare($consulta);
       $count=$result->execute(array(":nombre"=>$profesor->getNombre()));
       
       if ($count==1) {
           return true;
       }else {
           return false;
       }
               
    }
    
    public function getProfesores() {
        $consulta="SELECT * FROM profesor";
        $result=$this->conexion->query($consulta);
        
        $profesores=array();
        $cont=0;
        
        while($fila=$result->fetch()) {
            $profesor=new Profesor($fila["id"],$fila["nombre"]);
            $profesores[$cont]=$profesor;
            $cont++;
        }
        return $profesores;
    }
}

