<?php  
    include 'php/dbh.php';

    if (empty($_SESSION["username"]) || $_SESSION["user_type"] != "admin") {
        header('location: login.php');
    }
    $userReg = $_SESSION["username"];
    $sql = "SELECT id FROM users WHERE username= :username";
    $insertSql = $con->prepare($sql);
    $insertSql->bindParam(':username', $userReg);
    $insertSql->execute();
    $data = $insertSql->fetch();
    $_SESSION["id"] = $data["id"];
?>