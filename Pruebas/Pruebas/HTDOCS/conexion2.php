<?php
$usuario="alumno";
$password="alumno";
try {
$mbd = new PDO('mysql:host=localhost;dbname=alumno', $usuario, $password);
foreach($mbd->query('SELECT * from usuario') as $fila) {
print_r($fila);
echo "<br/>";
}

} catch (PDOException $e) {
print "¡Error!: " . $e->getMessage() . "<br/>";
die();
}

$mbd->query("CREATE TABLE `alumno`.`usuario2` (
  `idusuario` INT NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `apellidos` VARCHAR(255) CHARACTER SET 'latin1' NOT NULL,
  PRIMARY KEY (`idusuario`));");
print_r($mbd->errorInfo());



$mbd = null;
?>