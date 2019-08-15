<?php

  require_once('dbh.php');

  $product  = $_POST["product"];
  $price    = $_POST["price"];
  $category = $_POST["category"];
  $stock = $_POST["stock"];
  $cUser = $_POST["cUser"];

  $sqlQuery = "INSERT INTO products(Name, Price, Category, Stock, user_id) VALUES(:product, :price, :category, :stock, :cUser)";
  $sqlInsert = $con->prepare($sqlQuery);
  $sqlInsert->bindParam(':product', $product);
  $sqlInsert->bindParam(':price', $price);
  $sqlInsert->bindParam(':category', $category);
  $sqlInsert->bindParam(':stock', $stock);
  $sqlInsert->bindParam(':cUser', $cUser);

  // insert a row
    $sqlInsert->execute();
?>