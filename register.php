<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->

    <link href="css/theme.css" rel="stylesheet" media="all">
<style>
    
.error_message{
    color:red;
}

</style>
</head>
<?php include 'php/dbh.php';?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <?php include "php/registerBack.php"; ?>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="login-form">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>" >
                                    <span class="error_message"><?php echo $username_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" id="email" value="<?php echo $email; ?>">
                                    <span class="error_message"><?php echo $email_error; ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password" >
                                    <span class="error_message"><?php echo $password_error1; ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password Verify</label>
                                    <input class="au-input au-input--full" type="password" name="passwordV" placeholder="Password verify" id="passwordV" >
                                    <span class="error_message"><?php echo $password_error2; ?></span>

                                </div>
                            <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                              <p id="contentA"><strong><?php echo $_SESSION['RegisterError']; $_SESSION['RegisterError'] = '';?> </strong></p>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id="register" name="submit">register</button>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="index.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script type="text/javascript">
        if ($("#contentA").text() == " ") {
            $("#alert").hide();
        }
    </script>
</body>

</html>
<!-- end document-->