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
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<?php  
    include 'php/dbh.php';

    if (empty($_SESSION["username"])) {
        header('location: login.php');
        var_dump($_SESSION["username"]);
    }
?>

<?php var_dump($_SESSION['username']);  ?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>f
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li class="active has-sub">
                            <a href="chart.html">
                                <i class="fas fa-mobile" ></i>Aplikacion</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-laptop"></i>Webfaqe</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-trophy"></i>leaderboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

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
                            <a href="dashboard.php">
                                <i class="fas fa-mobile" ></i>Aplikacion</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-laptop"></i>Webfaqe</a>
                        </li>
                        <li  class="active has-sub">
                            <a href="leaderboard.php">
                                <i class="fas fa-trophy"></i>Leaderboard</a>
                        </li>
                        <li>
                            <a href="rateDashboard.php">
                                <i class="fas fa-star"></i>Rate</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float: right;">
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">10</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="php/logout.php"><?php echo $_SESSION['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"></a>
                                                    </h5>
                                                    <span class="email"></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning table-responsive-lg" id="leaderboardT">
                                        <thead>
                                            <tr id="noT">
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Nr. of projects</th>
                                                <th>Average Rating</th>
                                                <th>Nr. of Stars</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TB">
                                            <?php  
                                             $query = $con->prepare("SELECT * FROM users");
    
                                             $query->execute();

                                             $users = $query->fetchAll();
                                            $numO = 0;
                                            foreach ($users as $obj) {
                                                $reviewPrintN = 0;
                                                $reviewNum = 0;
                                                $numO+= 1;
                                                $idR = $obj["id"];
                                                $S_query = $con->prepare("SELECT Review FROM reviews WHERE OwnerId = $idR");
                                            
                                                $S_query->execute();

                                                $Reviewed = $S_query->fetchAll();

                                                foreach ($Reviewed as $obje) {
                                                    $reviewPrintN += (int)($obje["Review"]);
                                                    $reviewNum++;
                                                }

                                                echo "<tr id=Tr$numO>";
                                                    echo "<td id='place$numO'>"               . $numO ."</td>";
                                                    echo "<td id='username$numO'>"               . $obj["username"] ."</td>";
                                                    echo "<td id='NrOfPr$numO' class='longT'>"    . $reviewNum ."</td>";
                                                    echo "<td id='AR$numO' class='longT'>"    . $reviewPrintN/$reviewNum   ."</td>";
                                                    echo "<td id='Stars$numO' class='longT'>"    . $reviewPrintN   ."</td>";
                                                echo "</tr>";
                                            } 
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form>
                    <div class="modal-body">
                    <div class="input-group mb-3">
                      <input type="text" name="product" id="namePro"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Name of the Product...">
                    </div>               
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" name="price" id="pricePro" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Price of the product">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" name="stock" id="stockPro" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="How much in stock">
                    </div>  
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary" id="addCate">Add</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" id="listCate">
                          <a class="dropdown-item" href="#" id="Cate" >No categories found.</a>
                        </div>
                      </div>
                      <input type="text" name="category" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Add a category..." id="inputCate">
                    </div>
                  </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary" id="addPro" data-dismiss="modal">Add Product</button>
                  </div>
                </div>
              </div>
            </div>
        </form>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/leaderboard.js"></script>
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
