<?php  
	require_once('dbh.php');

	$id = $_POST["id"];
	$typeOfPr = $_POST["RevType"];
	$ppType = $_POST["ppType"];
	
	if ($typeOfPr == "app_projekte") {
		$typeOfPr = "projekete_app";
	};

	$sqlInsert = $con->prepare("UPDATE $typeOfPr SET approved = '$ppType' WHERE id = $id");
	$sqlInsert->execute();

?>