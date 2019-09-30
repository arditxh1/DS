<?php
  require_once('dbh.php');

  $username = $_POST["username"];
  $email = $_POST["email"];
  $passwordTemp = $_POST['password'];
  $password = password_hash($passwordTemp, PASSWORD_DEFAULT);
  $type = $_POST["type"];

  $sqlQuery = "INSERT INTO users(username, email, password, type) VALUES(:username, :email, :password, :type)";
  $sqlInsert = $con->prepare($sqlQuery);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':email', $email);
  $sqlInsert->bindParam(':password', $password);
  $sqlInsert->bindParam(':type', $type);

  // insert a row
  $sqlInsert->execute();

  header('location: ../addUser.php');
?>