<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "prueba1";

try {
	$conn = new PDO("mysql:host=$servername;dbname=prueba1", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}	
?>