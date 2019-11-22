<?php

require_once("dbh.php");
$username_error  = "";
$email_error     = "";
$password_error1  = "";
$password_error2 = "";
$username        = "";
$email           = "";

if (isset($_POST["submit"])) {
    $username  = $_POST["username"];
    $email     = $_POST["email"];
    $password  = $_POST['password'];
    $passwordV = $_POST['passwordV'];
    
    if ($username == "") {
        $username_error = "zbrazt";
    } else {
        if (!preg_match("/^[a-zA-Z-0-9]*$/", $username)) {
            $username_error = "Only letters, numbers and   white space allowed";
        } else {
            if ($email == "") {
                $email_error = "emaili i zbrazt";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email_error = "false email";
                } else {
                    if ($password == "") {
                        $password_error1 = "pasword empty";
                    } else {
                        if ($passwordV == "") {
                            $password_error2 = "pasword verify empty";
                        } else {
                          if ($password != $passwordV) {
                              $password_error2 = "password dont match";
                          }else{
                            $username_error  = "";
                            $email_error     = "";
                            $password_error1  = "";
                            $password_error2 = "";
                          }
                        }
                    }
                }
            }
        }
    }
}
?>