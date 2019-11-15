<?php 
  require_once('dbh.php');

  $Name = $_POST["Name"];
  $Short = $_POST["Short"];
  $Link = $_POST["Link"];
  $username = $_SESSION["username"];
  $user_id = $_SESSION["id"];
  $tableN = $_SESSION["PrType"];
  $ncf = $_POST["ncf"];

  $sqlQuery = "INSERT INTO  $tableN(Emri, Short, Link, username, user_id, ncf) VALUES(:Name, :Short, :Link, :username, :user_id, :ncf)";
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':Name', $Name);
  $sqlInsert->bindParam(':Short', $Short);
  $sqlInsert->bindParam(':Link', $Link);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':user_id', $user_id);
  $sqlInsert->bindParam(':ncf', $ncf);

  $sqlInsert->execute();

  $tableN = str_replace("_projekte","",$tableN);

    header('location: ../'. $tableN . '.php');

?>