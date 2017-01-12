<?php

$usuario="usuario";
$pass="usuario";

$mbd=new PDO('mysql:host=192.168.1.100;dbname=Album',$usuario,$pass);

foreach($mbd->query('SELECT * from Discografica')as $fila) {
    print_r($fila);
}
        
        
?>
