<?php

  require_once('dbh.php');

  $id  = $_POST["id"];

  $sqlQuery = "UPDATE comments set checked = 1 where id = :id";
  $sqlInsert = $con->prepare($sqlQuery);
  $sqlInsert->bindParam(':id', $id);
  $sqlInsert->execute();

?>