<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
	    echo 'We don\'t have mysqli!!!';
	} else {
	    echo 'Phew we have it!';
	}
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'Pr0t3c$10n';
	$database = 'dbventas';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $database);
	if(!$conn->connect_errno){
		die('No se puede conectar a la base de datos: ' . $conn->connect_errno);
	}
 ?>