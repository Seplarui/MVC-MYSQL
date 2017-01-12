<?php

$usuario="root";
$password="";
$servidor="localhost";
$base_datos="dws";


$base_datos_PDO=new PDO("mysql:host=$servidor;dbname=dws;charset=utf8",$usuario,$password);
$resultado=$base_datos_PDO->query("select * from DATOS");


?>
<table border="4">
    <tr><td>
    <?php
foreach ($resultado as $valor) {
    
    echo "<tr><td>". $valor['NOMBRE']." ". $valor['APELLIDOS']."</tr></td>". "</br>";
}
?>
</td>
</tr>
</table>