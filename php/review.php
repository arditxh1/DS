<?php

  require_once('dbh.php');

    $rev  = $_POST["rev"];
    $id  = $_POST["id"];
    $username = $_POST["lastUser"];

    $sqlQuery = "UPDATE projekete_app set Review = :rev where id = :id";
    $sqlInsert = $con->prepare($sqlQuery);
    $sqlInsert->bindParam(':rev', $rev);
    $sqlInsert->bindParam(':id', $id);
    $sqlInsert->execute();

    $query = $con->prepare("SELECT Review FROM projekete_app WHERE username = '$username'");
    $query->execute();
    $StarsG = $query->fetchAll();

    $num = -1;
    $Stars = 0;
    foreach ($StarsG as $obj) {
        $num++;
        $Stars += $StarsG[$num]["Review"];
    }

    $sqlQuery = "UPDATE users set Stars = $Stars where username = '$username'";
    $sqlInsert = $con->prepare($sqlQuery);
    $sqlInsert->execute();

?>