<?php 
  require_once('dbh.php');
  $fileDB = "";
  if (isset($_POST["submit"]) && $_FILES["File"]["name"] != "") {

    echo "nice";
    $file =  $_FILES["File"];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','apk','kodu');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $fileNameNew = uniqid('', true). "." . $fileActualExt;
          $fileDestination = '../uploads/' . $fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDB = 'uploads/' . $fileNameNew;
          echo "<br>";
          echo "File uploaded";
          
        }else{
          echo "Your file is to big";
        }
      }else{
        echo "There was a problem uploading your file";
      }
    }else{
      echo "You cannot upload files of this type";
    }
  }


  $Name = $_POST["Name"];
  $Short = $_POST["Short"];
  $Link = $_POST["Link"];
  $username = $_SESSION["username"];
  $user_id = $_SESSION["id"];
  if(!isset($_POST["ncf"])) {
    $ncf = 0;
  }else{
    $ncf = $_POST["ncf"];
  };


  $sqlQuery = "INSERT INTO  kodu_projekte(Emri, Short, File, Link, user_id, username, ncf) VALUES(:Name, :Short, :File, :Link, :user_id, :username, :ncf)";
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':Name', $Name);
  $sqlInsert->bindParam(':Short', $Short);
  $sqlInsert->bindParam(':Link', $Link);
  $sqlInsert->bindParam(':File', $fileDB);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':user_id', $user_id);
  $sqlInsert->bindParam(':ncf', $ncf);

    $sqlInsert->execute();

    echo $sqlQuery;

    $id = $_SESSION["id"];

    $query = $con->prepare("SELECT * FROM users WHERE id = $id");

    $query->execute();

    $tempNR = $query->fetchAll();

    $NrOfPr = $tempNR[0]["NrOfPr"] + 1;

    $sqlQuery = "UPDATE users set NrOfPr = $NrOfPr where id = $id";
  
    $sqlInsertT = $con->prepare($sqlQuery);

    $sqlInsertT->execute();

    header('location: ../kodu.php');

?>