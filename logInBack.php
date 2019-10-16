<?php 
	include_once("dbh.php");

	if(isset($_POST['logIn'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if(empty($username) || empty($password)) {
			$_SESSION['error'] = "Fill All";
			header('Location: ../index.php');


		}else{
				$sql = "SELECT * FROM users WHERE username= :username";

				$insertSql = $con->prepare($sql);

				$insertSql->bindParam(':username', $username);
				$insertSql->execute();

				$data = $insertSql->fetch();
				 
				if ($data == null) {
					$_SESSION['error'] = "Wrong Username !";
					$_SESSION['error1'] = " The username was not found in the server.";
					header('location: ../index.php');	
				}else{
					$passwordT = password_hash($password, PASSWORD_DEFAULT);
					if (password_verify($password, $data['password'])) {
						$_SESSION["username"] = $username;
						$_SESSION["password"] = $password;
						$_SESSION["id"] = $data['id'];
						$_SESSION["email"] = $data['email'];
						$_SESSION["user_type"] = $data['type'];
						if ($data['type'] == "user") {
							header('location: ../intro.php');
							var_dump($data["type"]);
						}else if ($data['type'] == "admin") {
							header('location: ../dashboardAdmin.php');
						}
					} else{
						$_SESSION['error'] = "Wrong Password !";
						var_dump("nice");
						$_SESSION['error1'] = " The username and password dont match.";
						header('location: ../index.php');
					}
				}

		}
	}
?>