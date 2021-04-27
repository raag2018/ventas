<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "../database/dbconnection.php";
	$rs = $conn->query("SELECT * FROM tabla_productos;");
	while($row = $rs->fetch_assoc()){
		echo $row['id_producto'];
	}
	mysqli_close($conn);
 ?>