<?php

  require_once('dbh.php');

    $month  = $_POST["month"];
    $RevType  = $_POST["RevType"];

    if($RevType == "code_projekte"){
        $RevType = 2;
    }

    $query = $con->prepare("SELECT `$month` FROM `yearly_data` WHERE id = $RevType");
    $query->execute();
    $currentVal = $query->fetchAll();

    var_dump($currentVal);

    $sqlInsert = $con->prepare("UPDATE `yearly_data` SET `$month` = 1 WHERE id = $RevType");
    
    $sqlInsert->execute();
?>