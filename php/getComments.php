<?php  
	require_once('dbh.php');


	$idOfPr = $_POST["idOfPr"];
    
    $query = $con->prepare("SELECT * FROM comments WHERE idOfPr = $idOfPr ORDER BY id");
    $query->execute();
    $comments = $query->fetchAll();
    
    echo json_encode($comments);
?>