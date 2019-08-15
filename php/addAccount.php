<?php

  require_once('dbh.php');

  $username  = $_POST["username"];
  $email    = $_POST["email"];
  $passwordTemp = $_POST['password'];
  $password = password_hash($passwordTemp, PASSWORD_DEFAULT);

  $sqlQuery = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
  $sqlInsert = $con->prepare($sqlQuery);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':email', $email);
  $sqlInsert->bindParam(':password', $password);

  // insert a row
    $sqlInsert->execute();

    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;

    header('location: ../dashboard.php');
?>