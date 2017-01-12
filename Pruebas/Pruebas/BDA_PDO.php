<?php

$usuario="alumno";
$password="alumno";
//PDO
function conectaDb() {
    

try {
    $db=new PDO("mysql:host=localhost;",$usuario,$password);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
    return($db);
    
} catch (PDOException $ex) {
    
    print "<p>Error: No puede conectarse a la base de datos.</p>\n";
    pie();
    exit();

}

//CREAR BASE DE DATOS

$db = conectaDb();
$dbDb="seplarui";
$consulta= "create database $dbDb";
//$db->prepare("create database seplarui");
if($db->query($consulta)) {
    
    print "<p>Base de datos creada correctamente</p><br/>";
} else {
    print "<p>Error al crear la base de datos.</p><br/>";
}




}





?>

