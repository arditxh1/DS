<?php 
  require_once('dbh.php');
  $fileDB = "";
  if (isset($_POST["submit"]) && $_FILES["ZIP"]["name"] != "") {
    echo "nice";
    $file =  $_FILES["ZIP"];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','apk','kodu','zip');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $fileNameNew = uniqid('', true). "." . $fileActualExt;
          $fileDestination = '../uploads/' . $fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDBSCR = 'uploads/' . $fileNameNew;
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

    if (isset($_POST["submit"]) && $_FILES["SCR"]["name"] != "") {
    $file =  $_FILES["SCR"];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','apk','kodu','zip');


    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $image_info = getimagesize($file['tmp_name']);
          if (($image_info[0]/$image_info[1]) > 1) {
            $fileNameNew = uniqid('', true). "." . $fileActualExt;
            $fileDestination = '../uploads/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            $fileDBZIP = 'uploads/' . $fileNameNew;
            echo "<br>";
            echo "File uploaded";
          }else{
            $_SESSION["q_error"] = "Please input a image that suits a cover (it needs to be horizontal).";
            header('location: ../web.php');
          }
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
  $Full = $_POST["Full"];
  $Link = $_POST["Link"];
  $username = $_SESSION["username"];
  $user_id = $_SESSION["id"];

  var_dump($fileDBZIP);
  var_dump($fileDBSCR);


  $sqlQuery = "INSERT INTO  web_projekte(Emri, Short, Full, File, Link, user_id, username, screenshot) VALUES(:Name, :Short, :Full, :File, :Link, :user_id, :username, :screenshot)";
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':Name', $Name);
  $sqlInsert->bindParam(':Short', $Short);
  $sqlInsert->bindParam(':Full', $Full);
  $sqlInsert->bindParam(':Link', $Link);
  $sqlInsert->bindParam(':File', $fileDBZIP);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':user_id', $user_id);
  $sqlInsert->bindParam(':screenshot', $fileDBSCR);

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
    
    header('location: ../web.php');

?>