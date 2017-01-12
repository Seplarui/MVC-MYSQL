<?php

$usuario="alumno";
$password="alumno";

$enlace = mysql_connect('localhost', $usuario, $password);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
//SE CREA LA BASE DE DATOS
/*$sql = 'CREATE DATABASE vehiculos';
if (mysql_query($sql, $enlace)) {
    echo "<meta charset='utf-8'";
    echo "Creada BBDD: seplarui\n";
} else {
    echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
}*/


//PRIMERO ME CONECTO A LA BASE DE DATOS

function conectaDb() {
    try {
        $db=new PDO("mysql:host=localhost",'root','root');
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
        return($db);
    } catch (PDOException $ex) {
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        
        print "<p>Error: ".$ex->getMessage()."</p>\n";
        pie();
        exit();

    }
}
/*
$db=  conectaDb();
$consulta="CREATE DATABASE seplarui";
if ($db->query($consulta)) {
    print "<p>Base de datos creada correctamente.</p>\n";
    
} else  {
    print "<p>Error al crear la base de datos</p>\n";
}
$db=NULL;

$db=  conectaDb();
//CREAR TABLA
$tabla_vehiculos="CREATE TABLE Vehiculos (id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT, nombre VARCHAR(250), apellidos VARCHAR(250), PRIMARY KEY(id))";
print_r($tabla_vehiculos);
$prueba_tabla= "CREATE TABLE agenda (id int(1) NOT NULL, AUTO INCREMENT, nombre CHAR(50),PRIMARY KEY (id));";
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($db->query($tabla_vehiculos)) {
    print "<p>Tabla Vehiculos creada correctamente.</p>\n";
} else {
    print "<p>Error al crear la tabla Vehiculos.</p>\n";
}

$db=NULL;*/
$db = conectaDb();
$sql="create table kk(id int(4));";
print_r($sql);
if ($db->query($sql)) {
print "<p>Tabla creada correctamente.</p>\n";
} else {
print "<p>Error al crear la tabla.</p>\n";
}
print_r($db->query($sql));
$db = NULL;
?>

