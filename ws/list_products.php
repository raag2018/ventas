<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "../database/dbconnection.php";
	$query = "SELECT id_producto, codigo, nombre FROM productos;";
	$rs = mysqli_query($conn, $query);
	$objProductos = new stdClass();
	$productos = [];
	while($row = mysqli_fetch_array($rs)){
		$producto = new stdClass();
		$producto->id_producto = $row['id_producto'];
		$producto->codigo = $row['codigo'];
		$producto->nombre = $row['nombre'];
		$productos[] = $producto;
	}
	$objProductos->productos = $productos;
	echo json_encode($objProductos);
	 //mysqli_free_result($rs); 
    //mysqli_close($link); 
 ?>