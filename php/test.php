<?php 

  require_once('dbh.php');

    $username = 'Arditxh2';

    $query = $con->prepare("SELECT Review FROM projekete_app WHERE username = '$username'");
    $query->execute();
    $StarsG = $query->fetchAll();

    $num = -1;
    $Stars = 0;
    foreach ($StarsG as $obj) {
    	$num++;
        $Stars += $StarsG[$num]["Review"];
    }
    echo $Stars;
    $sqlQuery = "UPDATE users set Stars = $Stars where username = '$username'";
	$sqlInsert = $con->prepare($sqlQuery);
    $sqlInsert->execute();
 ?>