<?php


error_reporting(E_ALL);
ini_set('display_errors','1');

include_once("config.php");
include_once("Profesor.php");


function cabecera() {
    
    echo "<h1>".Config::$titulo."</h1><hr/>\n";
    
}

function pie() {
    
    echo "<hr/><pre>".Config::$empresa." ".Config::$autor. " ";
    echo Config::$curso. " ".Config::$fecha. "</pre>\n";
    
}

function inicio() {
    
    echo "<align='right'><a href='index.php'>Inicio</a></align>\n";
    
}

?>