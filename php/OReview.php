<?php

  require_once('dbh.php');

    $rev  = $_POST["rev"];
    $PrId  = $_POST["PrId"];
    $UserId = $_SESSION["id"];
    $OwnerId = $_POST["revOwnerId"];
    $RevType = $_POST["RevType"];
    echo "INSERT INTO reviews(Review,PrId,UserId,OwnerId,RevType) VALUES($rev,$PrId,$UserId,$OwnerId,'$RevType')";


    $query = $con->prepare("SELECT * FROM reviews WHERE PrId = $PrId AND UserId = $UserId AND RevType = '$RevType'");

    $query->execute();

    $reviewed = $query->fetchAll();

    if (empty($reviewed)) {
        $sqlInsert = $con->prepare("INSERT INTO reviews(Review,PrId,UserId,OwnerId,RevType) VALUES($rev,$PrId,$UserId,$OwnerId,'$RevType')");

/*        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);*/

        $sqlInsert->execute();
    }else{
        $sqlInsert = $con->prepare("UPDATE reviews SET Review = $rev, PrId = $PrId, UserId = $UserId, OwnerId = $OwnerId, RevType = $RevType WHERE UserId = $UserId AND PrId = $PrId AND RevType = '$RevType'");

/*        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);*/

        $sqlInsert->execute();
    }

?>