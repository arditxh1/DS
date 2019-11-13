<?php  
	require_once('dbh.php');


	$PrId = $_POST["idOfPr"];
	$UserId = $_POST["UserId"];
	$OwnerId = $_POST["OwnerId"];
	$RevType = $_POST["TypeOfPr"] . "_projekte";
    
    $query = $con->prepare("SELECT * FROM reviews WHERE PrId = $PrId AND UserId = $UserId AND RevType = '$RevType'");
    $query->execute();
    $currentRev = $query->fetchAll();
    
    echo json_encode($currentRev);
?>