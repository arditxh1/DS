<?php
  require_once('dbh.php');

  $username = $_POST["username"];
  $email = $_POST["email"];
  $passwordTemp = $_POST['password'];
  $password = password_hash($passwordTemp, PASSWORD_DEFAULT);

  $query = $con->prepare("SELECT id FROM users WHERE username = :username");
  $query->bindParam(':username', $username);
  $query->execute();
  $usernameFetch = $query->fetchAll();

  if ($usernameFetch != null) {
    $_SESSION["RegisterError"] = "Username already exits";
    header('location: ../register.php');
  }else{

  $sqlQuery = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
  $sqlInsert = $con->prepare($sqlQuery);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':email', $email);
  $sqlInsert->bindParam(':password', $password);

  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;
  $_SESSION["user_type"] = "user";

  // insert a row
  $sqlInsert->execute();

  header('location: ../intro.php');
  };
?> -->