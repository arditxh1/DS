<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
    <script src="vendor/jquery-3.2.1.min.js"></script>
<?php  
    require_once('components/adminBlock.php');
?>
<script src="vendor/jquery-3.2.1.min.js"></script>
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="dashboardAdmin.php">
                                <i class="fas fa-mobile" ></i>Projects</a>
                        </li>
                        <li>
                            <a href="dashboardAdminPending.php">
                                <i class="fas fa-users"></i>Pending Projects</a>
                        </li>
                        <li>
                            <a href="dashboard2.php">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li class="active has-sub">
                            <a href="addUser.php">
                                <i class="fas fa-user-plus"></i>Add user</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php  include("components/header.php")?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6 ">
                                <div class="au-card">
                                    <div style="display: flex; justify-content: center; padding-bottom: 40px;">
                                        <h1>Add User</h1>
                                    </div>
                                    <div>
                                        <div>
                                            <form class="login-form" id="userForm">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="au-input au-input--full" type="text" name="username" placeholder="Username" id="username" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email" id="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password" required>
                                                    </div>
                                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id="register" style="width: 25%; margin-left: auto; margin-top: 40px; margin-bottom: 0 !important">register</button>
                                                <div class="alert" role="alert" id="alert" style="margin-top: 20px; display: none;">
                                                  This is a success alert—check it out!
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="au-card">
                                    <div style="display: flex; justify-content: center; padding-bottom: 40px;">
                                        <h1>Add Admin</h1>
                                    </div>
                                    <div>
                                        <div>
                                            <form id="userFormA">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="au-input au-input--full" type="text" placeholder="Username" id="usernameA" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input class="au-input au-input--full" type="email" placeholder="Email" id="emailA" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="au-input au-input--full" type="password" placeholder="Password" id="passwordA" required>
                                                    </div>
                                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id="registerA" style="width: 25%; margin-left: auto; margin-top: 40px; margin-bottom: 0 !important">register</button>
                                                <div class="alert" role="alert" id="alertA" style="margin-top: 20px; display: none;">
                                                  This is a success alert—check it out!
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="js/addUser.js"></script>

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/main.js"></script>

</script>

</body>

</html>
<!-- end document-->
