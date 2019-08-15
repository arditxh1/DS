<?php 
	include_once("dbh.php");

	if(isset($_POST['logIn'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if(empty($username) || empty($password)) {
			$_SESSION['error'] = "HEJ KY ERROR";
			header('Location: login.php');


		}else{
				$sql = "SELECT id,username,email,password FROM users WHERE username= :username";

				$insertSql = $con->prepare($sql);

				$insertSql->bindParam(':username', $username);
				$insertSql->execute();

				$data = $insertSql->fetch();
				 
				if ($data == null) {
					echo "wrong username";
				}else{
					$passwordT = password_hash($password, PASSWORD_DEFAULT);
					if (password_verify($password, $data['password'])) {
						$_SESSION["username"] = $data['username'];
						$_SESSION["password"] = $data['password'];
						$_SESSION["email"] = $data['email'];
						$_SESSION["id"] = $data['id'];

						if ($password == "DigitalSchool123") {
							header('location: ../dashboardAdmin.php');
						}else{
							header('location: ../dashboard.php');							
						}
					} else{
						echo "wrong password";
					}
				}

		}
	}
?>