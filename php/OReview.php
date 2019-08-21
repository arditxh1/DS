<?php

  require_once('dbh.php');

    $rev  = $_POST["rev"];
    $id  = $_POST["lastId"];
    $userId = $_SESSION["id"];
    $OwnerId = $_POST["ownerId"];

    $query = $con->prepare("SELECT * FROM reviews WHERE PrId = $id AND UserId = $userId");

    $query->execute();

    $reviewed = $query->fetchAll();

    if (empty($reviewed)) {
        echo "create";
        $sqlInsert = $con->prepare("INSERT INTO reviews(Review,PrId,UserId,OwnerId) VALUES($rev,$id,$userId,$OwnerId)");

        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);

        $sqlInsert->execute();
    }else{
        echo "update";
        $sqlInsert = $con->prepare("UPDATE reviews SET Review = $rev, PrId = $id, UserId = $userId, OwnerId = $OwnerId WHERE UserId = $userId AND PrId = $id");

        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);

        $sqlInsert->execute();
    }

?>