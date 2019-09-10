<?php 
  require_once('dbh.php');
  $fileDB = "";
  $filesUp = 0;
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

    $allowed = array('jpg','jpeg','png','apk','kodu','zip','stencyl');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $fileNameNew = uniqid('', true). "." . $fileActualExt;
          $fileDestination = '../uploads/' . $fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDBZIP = 'uploads/' . $fileNameNew;
          $filesUp++;
          
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

    $allowed = array('jpg','jpeg','png','apk','kodu','zip','stencyl');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $image_info = getimagesize($file['tmp_name']);
          if (($image_info[0]/$image_info[1]) > 1) {
            $fileNameNew = uniqid('', true). "." . $fileActualExt;
            $fileDestination = '../uploads/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            $fileDBSCR = 'uploads/' . $fileNameNew;
            $filesUp++;

          }else{
            $_SESSION["q_error"] = "Please input a image that suits a cover (it needs to be horizontal).";
            header('location: ../stencyl.php');
          }
        }else{
          echo "Your file is to big";
        }
      }else{
        $_SESSION["q_error"] = "There was a problem uploading your file.";
        header('location: ../stencyl.php');
      }
    }else{
      echo "You cannot upload files of this type";
    }
  }

  $Name = $_POST["Name"];
  $Short = $_POST["Short"];
  $SCR = $fileDBSCR;
  $File = $fileDBZIP;
  $username = $_SESSION["username"];
  $user_id = $_SESSION["id"];

  $sqlQuery = "INSERT INTO  stencyl_projekte(Emri, Short, SCR, File, username, user_id) VALUES(:Name, :Short, :SCR, :File, :username, :user_id)";
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':Name', $Name);
  $sqlInsert->bindParam(':Short', $Short);
  $sqlInsert->bindParam(':SCR', $SCR);
  $sqlInsert->bindParam(':File', $File);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':user_id', $user_id);

    $sqlInsert->execute();


    $id = $_SESSION["id"];

    $query = $con->prepare("SELECT * FROM users WHERE id = $id");

    $query->execute();

    $tempNR = $query->fetchAll();

    $NrOfPr = $tempNR[0]["NrOfPr"] + 1;

    $sqlQuery = "UPDATE users set NrOfPr = $NrOfPr where id = $id";
  
    $sqlInsertT = $con->prepare($sqlQuery);

    $sqlInsertT->execute();

    header('location: ../stencyl.php');

?>