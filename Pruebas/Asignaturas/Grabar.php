<html>
    
    <head>
        
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        error_reporting(E_ALL);
        ini_set('display_errors','1');
        
        include_once("funciones.php");
        include_once("Modelo.php");
        include_once("Config.php");
        
        cabecera();
        
        function recoge($campo) {
            
            if(isset($_REQUEST[$campo])) {
                $valor=  htmlspecialchars(trim(strip_tags($_REQUEST[$campo])));
            } else {
                $valor="";
            }
            
            return $valor;
        }
        
        function leer() {
            
            $id=recoge("id");
            $nombre=recoge("nombre");
            $profe=new Profesor($id, $nombre);
            return $profe;
            
        }
        
        $profesor= new Profesor("","");
        $profesor=leer();
        
        if($profesor->getNombre()=="") {
            
            echo "Error: Campos vacios"."<br>";
            
        } else {
            
            $modelo=new Modelo(Config::$bdnombre, Config::$bdusuario,Config::$bdclave, Config::$bdhostname);
            
            if($modelo->setProfesor($profesor)) {
                
                echo "Grabado: ".$profesor->getNombre(). "<br>";
                
            } else {
                
                echo "No Grabado: ".$profesor->getNombre(). "<br/>";
            }
        }
        
        inicio();
        pie();
        
        ?>
        
              
    </body>
        
    
</html>
