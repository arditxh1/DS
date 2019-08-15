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
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Stars-->

    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
    <script src="vendor/jquery-3.2.1.min.js"></script>
 <?php  
    include 'php/dbh.php';

    if (empty($_SESSION["username"])) {
        header('location: login.php');
    }

    if ($_GET['type'] == "") {
        $typeR = "id";
    }else{
        $typeR = $_GET['type'];
    }
?>

    <?php  
    include 'php/dbh.php';
        $query = $con->prepare("SELECT * FROM projekete_app ORDER BY $typeR");

        $query->execute();

        $projekte = $query->fetchAll();
    ?>
    <script src="vendor/jquery-3.2.1.min.js"></script>
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
                                <i class="fas fa-laptop" ></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-cog"></i>Settings</a>
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
                        <li class="active has-sub">
                            <a href="chart.html">
                                <i class="fas fa-mobile" ></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-cog"></i>Settings</a>
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username']; ?></a>
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
                                                        <a href="#"><?php echo $_SESSION['username']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']; ?></span>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="display: flex; justify-content: flex-end; align-items: center; padding-bottom: 20px; padding-right: 20px;">
                            <!-- Example single danger button -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item active" href="#">Recent</a>
                                <a class="dropdown-item" id="ReviewS" href="dashboardAdmin.php?type=Review DESC">Review</a>
                                <a class="dropdown-item" id="AlphaS" href="dashboardAdmin.php?type=Emri">Alphabetically</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lorem Ipsum</a>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr id="noT">
                                                <th>Emri i Aplikacionit </th>
                                                <th>Emri i Dorezimit</th>
                                                <th>Short description</th>
                                                <th>Full description</th>
                                                <th>App's Screenshots</th>
                                                <th>Icon</th>
                                                <th>Cover design</th>
                                                <th>APK</th>
                                                <th>Review</th>
                                                <th>Id</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TB">
                                            <?php $num = 0; ?>
                                            <?php foreach ($projekte as $obj) {
                                                $num+= 1;
                                                
                                                echo "<tr id=Tr$num>";
                                                    echo "<td id='Emri$num'>"           . $obj["Emri"]     ."</td>";
                                                    echo "<td id='username$num'>"       . $obj["username"] ."</td>";
                                                    echo "<td id='Short$num' class='longT'>"          . $obj["Short"]    ."</td>";
                                                    echo "<td id='Full$num' class='longT'>"           . $obj["Full"]     ."</td>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["SCR"]      ." download>Screenshots</a></td>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["Icon"]     ." download>Icons</a></td>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["CD"]       ." download>Cover Designs</a></td>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["APK"]      ." download>APK</a></td>";
                                                    echo "<td id='Rev$num'>"           . $obj["Review"]     ."</td>";
                                                    echo "<td id='Id$num'>"           . $obj["id"]     ."</td>";
                                                echo "</tr>";
                                            } 
                                             ?>
                                        </tbody>
                                        <script type="text/javascript">
                                        var count = $("#TB tr").length;
                                        RatingS = {};
                                        for (var i = count; i >= 0; i--) {
                                            if ($("#Rev" + i).text() == "11") {
                                               $("#Rev" + i).text("Not reviewed");
                                               RatingS["#Tr" + i] = 0;
                                            }else{
                                                 RatingS["#Tr" + i] = $("#Rev" + i).text();
                                            }
                                        }
                                        keysSorted = Object.keys(RatingS).sort(function(a,b){return RatingS[b]-RatingS[a]})
                                        </script>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document" style="margin: 1.75rem 28rem">
          <div class="modal-content" style="width: 1000px;">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Project of?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             </div>
             <form>
                <div class="modal-body" style="overflow:scroll; height:600px; overflow-x: hidden;">
                    <div class="row">
                        <div class="col-4">
                          <div id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action active" href="#list-item-1">Emri I Aplikacionit</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Emri I Dorezimit</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-3">Short Description</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-4">Full Description</a>
                          </div>
                        </div>
                        <div class="col-8">
                          <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                            <h4 id="list-item-1">Emri I Aplikacionit</h4>
                            <br>
                            <p id="emriAM">Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                            <br>
                            <h4 id="list-item-2">Emri I Dorezimit</h4>
                            <br>
                            <p id="emriDM">Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
                            <br>
                            <h4>Short Description</h4>
                            <br>
                            <p id="sdM">Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
                            <br>
                            <h4>Full Description</h4>
                            <br>
                            <p id="ldM">Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
                            <!--Stars -->
                            <link rel="stylesheet" type="text/css" href="css/stars.css">
                               <div id="half-stars-example" style="  margin-top: 4rem; margin-left: 25rem; display: flex; justify-content: center; align-items: flex-end; flex-direction: column;">
                                    <h3 id="starN" style="    padding-right: 10px;">0</h3>
                                  <div class="rating-group">
                                     <input class="rating__input rating__input--none" checked="" name="rating2" id="rating0" value="0" type="radio">
                                     <label aria-label="0 stars" class="rating__label" for="rating0">&nbsp;</label>
                                     <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating1"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                     <input class="rating__input" name="rating2" id="rating1" value="0.5" type="radio">
                                     <label aria-label="1 star" class="rating__label" for="rating2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                     <input class="rating__input" name="rating2" id="rating2" value="1" type="radio">
                                     <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating3"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                     <input class="rating__input" name="rating2" id="rating3" value="1.5" type="radio">
                                     <label aria-label="2 stars" class="rating__label" for="rating4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                     <input class="rating__input" name="rating2" id="rating4" value="2" type="radio">
                                     <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating5"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                     <input class="rating__input" name="rating2" id="rating5" value="2.5" type="radio">
                                     <label aria-label="3 stars" class="rating__label" for="rating6"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                     <input class="rating__input" name="rating2" id="rating6" value="3" type="radio">
                                     <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating7"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                     <input class="rating__input" name="rating2" id="rating7" value="3.5" type="radio">
                                     <label aria-label="4 stars" class="rating__label" for="rating8"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                     <input class="rating__input" name="rating2" id="rating8" value="4" type="radio">
                                     <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating9"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                     <input class="rating__input" name="rating2" id="rating9" value="4.5" type="radio">
                                     <label aria-label="5 stars" class="rating__label" for="rating10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                     <input class="rating__input" name="rating2" id="rating10" value="5" type="radio">
                                  </div>
                               </div>
                               <script type="text/javascript">
                                  $("input[type=radio]").click(function() {
                                        $("#starN").text($(this).val() * 2);
                                        rev = $(this).val() * 2;
                                     });

                                  $("input[type=radio]").val()
                               </script>
                          </div>
                        </div>
                      </div>
                </div>
             </form>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeM">Close</button>
                <button type="submit" name="submit" class="btn btn-primary" id="addRev" data-dismiss="modal">Review</button>
             </div>
          </div>
       </div>
    </div>
    <!-- Jquery JS-->

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

    <script src="js/admin.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
