<?php

$usuario="alumno";
$password="alumno";

$enlace = mysql_connect('localhost', $usuario, $password);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
//CREA LA BASE DE DATOS
$sql = 'CREATE DATABASE seplarui';
if (mysql_query($sql, $enlace)) {
    echo "<meta charset='utf-8'";
    echo "Creada BBDD: seplarui\n";
} else {
    echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
}

//CREA TABLA
//$mbd=new PDO('mysql:host=localhost;dbname=glpi', $usuario,$password);
$mbd=new PDO('mysql:host=localhost;dbname=seplarui',$usuario,$password);
$mbd->query("CREATE TABLE `seplarui`.`tabla1` (
  `idusuario` INT NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `apellidos` VARCHAR(255) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idusuario`));");
echo "<p>Error info</p><br/>";
print_r($mbd->errorInfo());



?>
