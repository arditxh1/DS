<?php 
    require_once('dbh.php');
    $checkedId = array();
    $reviewPrintN = 0;
    $PrNum = 0;
    $reviewNum = 0;
    $user_id = $_POST["user_id"];
    $typeOfPr = $_POST["typeOfPr"] . "_projekte";
    $idOfPr = $_POST["idOfPr"];

    $S_query = $con->prepare("SELECT * FROM reviews WHERE OwnerId = $user_id AND PrId = $idOfPr AND RevType = '$typeOfPr'");

    $S_query->execute();

    $Reviewed = $S_query->fetchAll();

    foreach ($Reviewed as $obje) {
        $reviewPrintN += (int)($obje["Review"]);
        $reviewNum++;
    };

    echo($reviewPrintN/$reviewNum);
?>