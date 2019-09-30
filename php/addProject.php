<?php 
  require_once('dbh.php');

  $REQ = array('SCR','Icon','Cover','APK');
  foreach($REQ as $fileQ) {
  if (isset($_POST["submit"])) {
    $file =  $_FILES[$fileQ];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','apk');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          if ($fileQ == 'Cover') {
            $image_info = getimagesize($file['tmp_name']);
            if (($image_info[0]/$image_info[1]) > 1) {
              $fileNameNew = uniqid('', true). "." . $fileActualExt;
              $fileDestination = '../uploads/' . $fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              $fileDB = 'uploads/' . $fileNameNew;
            }else{
              $_SESSION["q_error"] = "Please input a image that suits a cover (it needs to be horizontal).";
              header('location: ../dashboard.php');
            }
          }else{
              $fileNameNew = uniqid('', true). "." . $fileActualExt;
              $fileDestination = '../uploads/' . $fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              $fileDB = 'uploads/' . $fileNameNew;
          }
          if ($fileQ == 'SCR') {
            $SCRDB = "$fileDB";
          }else if ($fileQ == 'Icon') {
            $IconDB = "$fileDB";
          }else if ($fileQ == 'Cover') {
            $CoverDB = "$fileDB";
          }else if ($fileQ == 'APK') {
            $APKDB = "$fileDB";
          }
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
}



  $Name = $_POST["Name"];
  $Short = $_POST["Short"];
  $Long = $_POST["Long"];
  $SCR = $SCRDB;
  $Icon = $IconDB;
  $Cover = $CoverDB;
  $APK = $APKDB;
  $username = $_SESSION['username'];
  $userId = $_SESSION['id'];

  $sqlQuery = "INSERT INTO projekete_app(Emri, Short, Full, SCR, Icon, CD, APK, username, user_Id) VALUES(:Name, :Short, :Long, :SCR, :Icon, :Cover, :APK, :username, :userId)";
  $sqlInsert = $con->prepare($sqlQuery);

  $sqlInsert->bindParam(':Name', $Name);
  $sqlInsert->bindParam(':Short', $Short);
  $sqlInsert->bindParam(':Long', $Long);
  $sqlInsert->bindParam(':SCR', $SCR);
  $sqlInsert->bindParam(':Icon', $Icon);
  $sqlInsert->bindParam(':Cover', $Cover);
  $sqlInsert->bindParam(':APK', $APK);
  $sqlInsert->bindParam(':username', $username);
  $sqlInsert->bindParam(':userId', $userId);

    $sqlInsert->execute();

    $id = $_SESSION["id"];

    $query = $con->prepare("SELECT * FROM users WHERE id = $id");

    $query->execute();

    $tempNR = $query->fetchAll();

    $NrOfPr = $tempNR[0]["NrOfPr"] + 1;

    $sqlQuery = "UPDATE users set NrOfPr = $NrOfPr where id = $id";
  
    $sqlInsertT = $con->prepare($sqlQuery);

    $sqlInsertT->execute();

    header('location: ../dashboard.php');

?>