<?php

  require_once('dbh.php');

    $rev  = $_POST["rev"];
    $id  = $_POST["id"];
    $type = $_POST["type"];

    if ($type == "web") {
        $type = "web_projekte";
    }else if ($type == "app") {
        $type = "projekete_app";
    }else if ($type == "stencyl") {
        $type = "stencyl_projekte";
    }else if ($type == "kodu") {
        $type = "kodu_projekte";
    }else if ($type == "scratch") {
        $type = "scratch_projekte";
    }else if ($type == "code"){
        $type = "code_projekte";
    }

    $sqlQuery = "UPDATE $type set Review = :rev where id = :id";
    $sqlInsert = $con->prepare($sqlQuery);
    $sqlInsert->bindParam(':rev', $rev);
    $sqlInsert->bindParam(':id', $id);
    $sqlInsert->execute();

?>