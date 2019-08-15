<?php

  require_once('dbh.php');

  $name = trim($_POST["nameT"]);
  $price = trim($_POST["priceT"]);
  $stock = trim($_POST["stockT"]);
  $cate = trim($_POST["cateT"]);
  $prod_id  = trim($_POST["prod_id"]);

  echo $name;
  echo $price;
  echo $stock;
  echo $cate;
  
  $sqlQuery = "UPDATE products set name = :name, price = :price, stock = :stock, cate = :cate where id = :id";
  
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':name', $name);
  $sqlInsert->bindParam(':price', $price);
  $sqlInsert->bindParam(':stock', $stock);
  $sqlInsert->bindParam(':cate', $cate);
  $sqlInsert->bindParam(':id', $prod_id);

  $sqlInsert->execute();