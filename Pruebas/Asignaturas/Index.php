<!DOCTYPE html>

<html>
    
    <head><title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <?php
        include_once("funciones.php");
        include_once("Modelo.php");
        include_once("config.php");
        cabecera();
        ?>
        <p>Gestión de Profesor: </p>
        <ul>
            <li><a href="Formulario.html">Alta</a></li>
        </ul>
        
        
        
        <?php
        echo "<p>Listado:</p>";
        echo '<table bordero="1" with="100">';
        echo '<tr>';
        echo '<td>Id Prof</td>';
        echo '<td>Nom Prof</td>';
        echo '</tr>';
        
        $modelo=new Modelo(Config::$bdnombre, Config::$bdusuario, Config::$bdclave, Config::$bdhostname);
        $profesores=$modelo->getProfesores();
        
        if(count($profesores)>0) {
            foreach($profesores as $profesor) {
                echo "<tr>";
                echo "<td>".$profesor->getId()."</td>";
                echo "<td>".$profesor->getNombre()."</td>";
                echo "</tr>";
            }
        }
        
        echo "</table>";
        echo "<br/>";
        
        inicio();
        pie();
        ?>
        
        
    </body>
    
</html>