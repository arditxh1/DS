<?php  
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "ds";

	try {
	    $con = new  PDO("mysql:host=$host;dbname=$db",$user,$pass);
	} catch (PDOException $e) {
		echo "not connected" . $e->getMessage();
	}
?>