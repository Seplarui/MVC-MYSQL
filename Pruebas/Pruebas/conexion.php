<?php

$usuario="daw";
$password="daw";

$mdb= new PDO('mysql:host=localhost;dbname=encuestas',$usuario,$password);

print_r($mdb);







?>
