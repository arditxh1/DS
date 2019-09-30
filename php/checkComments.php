<?php

  require_once('dbh.php');

  $id  = $_POST["id"];
  $type  = $_POST["type"];

  if ($type == "reviews") {
  	  $sqlQuery = "UPDATE reviews set checked = 1 where id = :id";
	  $sqlInsert = $con->prepare($sqlQuery);
	  $sqlInsert->bindParam(':id', $id);
	  $sqlInsert->execute();
  }else{
  	  $sqlQuery = "UPDATE comments set checked = 1 where id = :id";
	  $sqlInsert = $con->prepare($sqlQuery);
	  $sqlInsert->bindParam(':id', $id);
	  $sqlInsert->execute();
  }



?>