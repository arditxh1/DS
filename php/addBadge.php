<?php
  require_once('dbh.php');

  $idOfPr = $_POST["idOfPr"];
  $Badge = $_POST["Badge"];
  $typeOfPr = $_POST['RevType'];

  if ($typeOfPr == "app_projekte") {
    $typeOfPr = "projekete_app";
  };

  $query = $con->prepare("SELECT badges FROM ".$typeOfPr." WHERE id = $idOfPr");
  $query->execute();
  $badgesReturn = $query->fetchAll();
  $Badges = array("design","code","idea");
  foreach ($Badges as $cBadge) {
    if ($Badge == $cBadge) {
      if (strpos($badgesReturn[0][0], $cBadge) !== false) {
        echo "Used";
      }else{
        $sqlQuery = "UPDATE $typeOfPr set badges = :Badge WHERE id = :idOfPr";
        if ($badgesReturn[0][0] != "none") {
          $Badge = $badgesReturn[0][0] . "," . $Badge;
        };
        $sqlInsert = $con->prepare($sqlQuery);
        $sqlInsert->bindParam(':Badge', $Badge);
        $sqlInsert->bindParam(':idOfPr', $idOfPr);
        $sqlInsert->execute();
      };
    };
  };
?>