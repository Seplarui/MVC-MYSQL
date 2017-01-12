<?php

$usuario="glpi";
$password="Nunsys01";

try {
    $mbd=new PDO('mysql:host=localhost;dbname=glpi', $usuario,$password);
    foreach($mbd->query('Select name,firstname,last_login from glpi_users')as $fila) {
        print_r($fila);
        echo "<br/>";
    }
} catch (PDOException $ex) {
    
    print "Error: ". $ex->getMessage()."<br/>";
    print "Error: ". $ex->errorInfo();

}












?>

