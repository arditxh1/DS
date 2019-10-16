<?php 
include_once('dbh.php');
session_unset(); 

session_destroy();

header('Location: ../index.php');

?>