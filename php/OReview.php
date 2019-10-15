<?php

  require_once('dbh.php');

    $rev  = $_POST["rev"];
    $PrId  = $_POST["PrId"];
    $UserId = $_SESSION["id"];
    $OwnerId = $_POST["revOwnerId"];
    $RevType = $_POST["RevType"];
    $time = $_POST["dateN"];

    $query = $con->prepare("SELECT * FROM reviews WHERE PrId = $PrId AND UserId = $UserId AND RevType = '$RevType'");

    $query->execute();

    echo "UPDATE reviews SET Review = $rev, PrId = $PrId, UserId = $UserId, OwnerId = $OwnerId, RevType = '$RevType', time = '$time' WHERE UserId = $UserId AND PrId = $PrId AND RevType = '$RevType'";

    $reviewed = $query->fetchAll();

    if (empty($reviewed)) {
        $sqlInsert = $con->prepare("INSERT INTO reviews(Review,PrId,UserId,OwnerId,RevType,time) VALUES($rev,$PrId,$UserId,$OwnerId,'$RevType', '$time')");

/*        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);*/

        $sqlInsert->execute();
    }else{
        $sqlInsert = $con->prepare("UPDATE reviews SET Review = $rev, PrId = $PrId, UserId = $UserId, OwnerId = $OwnerId, RevType = '$RevType', time = '$time' WHERE UserId = $UserId AND PrId = $PrId AND RevType = '$RevType'");

/*        $sqlInsert->bindParam(':rev', $rev);
        $sqlInsert->bindParam(':id', $id);
        $sqlInsert->bindParam(':userId', $userId);*/

        $sqlInsert->execute();
    }

?>