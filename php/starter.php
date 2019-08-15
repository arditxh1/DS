<?php
	include 'dbh.php';

	//$sqlQuery = "create database test";
	/*$sqlQuery = "create table products(id int NOT NULL auto_increment,
			Name VARCHAR(10) NOT NULL, 
			Price int NOT NULL,
			Category VARCHAR(25) NOT NULL,
			Stock int NOT NULL,
			primary key (id)
			)";*/

	$sqlQuery = "INSERT INTO products(Name,Price,Category,Stock) VALUES('Yeezuz', '10', 'T-Shirt', '400')";

	$con->exec($sqlQuery);
?>