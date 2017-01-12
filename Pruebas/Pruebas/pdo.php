<?php


$usuario="alumno";
$password="alumno";

$db=new PDO("mysql:host=localhost;",$usuario,$password);

print_r($db);
echo "<br/>";
$db->errorInfo();

//CREO LA BASE DE DATOS

$db->query("create database ceedcv"
        . " default character set utf8 "
        . "default collate utf8_general_ci");
echo "<p>Creada BBDD: ceedcv</p>";

//CREO LAS TABLAS DE LA BASE DE DATOS

$db->query("create table `ceedcv`.`marca`(id int(5),
`marca` varchar(255),
PRIMARY KEY(id) DEFAULT CHARSET=utf8");

$db->query("create table ceedcv.modelo(idmodelo int NOT NULL, 
        modelo varchar(255) NOT NULL,
        idmarca INT NOT NULL, PRIMARY KEY(idmodelo), 
        CONSTRAINT FK_MARCA FOREIGN KEY(idmarca) REFERENCES ceedcv.marca(id)) DEFAULT CHARSET=utf8");


$db->errorInfo();
$db->errorCode();
?>