<?php 
	
	if (isset($_POST["submit"])) {
		$file =  $_FILES['file'];

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
				if ($fileSize < 1000000) {
					$fileNameNew = uniqid('', true). "." . $fileActualExt;
					$fileDestination = 'uploads/' . $fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
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

?>