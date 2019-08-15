<?php
echo "nice";
try {
		include 'php/dbh.php';

	$name= $_POST['name'];
	$price= $_POST['price'];
	$stock= $_POST['stock'];
	$category= $_POST['category'];

	$sqlQuery = "INSERT INTO products(Name,Price,Category,Stock) VALUES('$name', '$price', '$stock', '$category')";

	$con->exec($sqlQuery);
} catch (Exception $e) {
	echo $e;
}

?>