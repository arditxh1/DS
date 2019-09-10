<?php  
	require_once('dbh.php');

	$idOfPr  = $_POST["idOfPr"];
  	$TypeOfPr    = $_POST["TypeOfPr"];
  	$Message = $_POST["Message"];
  	$time = $_POST["date"];
  	$user_id = $_SESSION["id"];
  	$username = $_SESSION["username"];
  	$receiver_id = $_POST["receiver_id"];

	$sqlQuery = "INSERT INTO comments(idOfPr, TypeOfPr, Mesage, user_id, time, username, receiver_id) VALUES(:idOfPr, :TypeOfPr, :Message, :user_id, :time, :username, :receiver_id)";
	$sqlInsert = $con->prepare($sqlQuery);
	$sqlInsert->bindParam(':idOfPr', $idOfPr);
	$sqlInsert->bindParam(':TypeOfPr', $TypeOfPr);
	$sqlInsert->bindParam(':Message', $Message);
	$sqlInsert->bindParam(':user_id', $user_id);
	$sqlInsert->bindParam(':time', $time);
	$sqlInsert->bindParam(':username', $username);
	$sqlInsert->bindParam(':receiver_id', $receiver_id);

	// insert a row
	$sqlInsert->execute();
?>