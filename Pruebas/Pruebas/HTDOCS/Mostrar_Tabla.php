<?php
$nombre = "usuario1";
$usuario="glpi";
$password="Nunsys01";
try{
	$conn = new PDO('mysql:host=localhost;dbname=glpi', $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = $conn->prepare('SELECT name, password, firstname FROM glpi_users ');
	$sql->execute(array('Nombrekk' => $nombre));
	$resultado = $sql->fetchAll();
echo "<table border='1'>";
echo "<tr><td>Usuario</td>";
echo "<td>Password</td>";
echo "<td>Nombre</td>";


echo "</tr>";

	foreach ($resultado as $row) {
                echo "<tr><td>";
		        echo $row["name"]. "</td>";
                echo "<td>".$row["password"]. "</td>";
                echo "<td>".$row["firstname"]."</td>";
                echo "</tr>";
              

	}
        echo "</table>";
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
}
?>
