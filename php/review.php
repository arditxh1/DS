<?php

  require_once('dbh.php');

  $rev  = $_POST["rev"];
  $id  = $_POST["id"];

  $sqlQuery = "UPDATE projekete_app set Review = :rev where id = :id";

  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':rev', $rev);
  $sqlInsert->bindParam(':id', $id);

  // insert a row
    $sqlInsert->execute();

?>