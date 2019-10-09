<?php  
	require_once('dbh.php');

	$id = $_POST["id"];
	$typeOfPr = $_POST["RevType"];
	$ppType = $_POST["ppType"];

	echo "$typeOfPr";
	
	if ($typeOfPr == "app_projekte") {
		$typeOfPr = "projekete_app";
	};
	if ($typeOfPr == "html_projekte") {
		$typeOfPr = "web_projekte";
	};

	$sqlInsert = $con->prepare("UPDATE $typeOfPr SET approved = '$ppType' WHERE id = $id");
	$sqlInsert->execute();

?>