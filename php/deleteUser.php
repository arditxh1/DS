<?php  
  require_once('dbh.php');
  $userID = $_POST["id"];
  $id = (int)$userID;
  $query = $con->prepare("DELETE FROM users WHERE id = $id");
  $query->execute();
?>