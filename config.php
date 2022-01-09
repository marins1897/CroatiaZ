<?php 
	session_start();
	// spoji se s bazom podataka
	$conn = mysqli_connect("localhost", "root", "", "croatiaz");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // definiraj globalne konstante
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/croatiaz/');

?>




 
