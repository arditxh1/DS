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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">



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
    if ($_GET['search'] == "") {
        $query = $con->prepare("SELECT * FROM projekete_app ORDER BY $typeR");
    }else{
        $search = $_GET['search'];
        $query = $con->prepare("SELECT * FROM projekete_app WHERE Emri LIKE '$search%' ");
        print_r($query);
    }
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
                            <a href="dashboard2.php">
                                <i class="fas fa-users"></i>Users</a>
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
                        <div class="row" style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 20px; padding-right: 20px;">
                            <!-- Example single danger button -->
                            <input type="checkbox" checked data-toggle="toggle" id="togg">
                            <div class="form-inline md-form form-sm mt-0">
                              <i class="fas fa-search" aria-hidden="true"></i>
                              <input type="text" placeholder="Search" aria-label="Search" id="searchI">
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item active FilterB" id="codeF"href="#">Code</a>
                                <a class="dropdown-item FilterB" id="scratchF">Scratch</a>
                                <a class="dropdown-item FilterB" id="koduF">Kodu</a>
                                <a class="dropdown-item FilterB" id="stencylF">Stencyl</a>
                                <a class="dropdown-item FilterB" id="appF">App Inventor</a>
                                <a class="dropdown-item FilterB" id="webF">Web</a>
                                <a class="dropdown-item FilterB" id="wordF">Wordpress</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item FilterB" href="#" id="allF">All</a>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <div id="mainD" class="au-card" style="display: flex; flex-direction: row; flex-wrap: wrap;"></div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning table-responsive-lg" id="table">
                                        <thead>
                                            <tr id="noT">
                                                <th onclick='sortTable(0)'>Emri i Aplikacionit ▼</th>
                                                <th onclick='sortTable(1)'>Emri i Dorezimit ▼</th>
                                                <th onclick='sortTable(2)'>Short description</th>
                                                <th onclick='sortTable(3)'>Full description</th>
                                                <th onclick='sortTable(4)'>App's Screenshots</th>
                                                <th onclick='sortTable(5)'>Icon</th>
                                                <th onclick='sortTable(6)'>Cover design</th>
                                                <th onclick='sortTable(7)'>APK</th>
                                                <th onclick='sortTable(8)'>Review ▼</th>
                                                <th onclick='sortTable(9)'>Open Review ▼</th>
                                                <th onclick='sortTable(10)'>Id ▼</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TB">
                                            <?php $num = 0; 
                                            $checkedId = array();
                                            ?>
                                            <?php foreach ($projekte as $obj) {
                                                $num+= 1;
                                                $prNum = 0;
                                                $reviewPrintN = 0;
                                                $reviewNum = 0;
                                                $PrId = $obj['id'];
                                                $nice = $con->prepare("SELECT * FROM reviews WHERE PrId = $PrId");
                                                $nice->execute();
                                                $ReviewedD = $nice->fetchAll();

                                                foreach ($ReviewedD as $obje) {
                                                    $reviewPrintN += (int)($obje["Review"]);
                                                    $reviewNum++;
                                                    if (!in_array($obje["PrId"], $checkedId)) {
                                                       $prNum++;
                                                       array_push($checkedId, $obje["PrId"]);
                                                    }
                                                }
                                                echo "<tr id=Tr$num>";
                                                    echo "<td id='Emri$num'>"                . $obj["Emri"]     ."</td>";
                                                    echo "<td id='username$num'>"            . $obj["username"] ."</td>";
                                                    echo "<td id='Short$num' class='longT'>" . $obj["Short"]    ."</td>";
                                                    echo "<td id='Full$num' class='longT'>"  . $obj["Full"]     ."</td>";
                                                    echo "<td id='SCR$num'> <a href = "      . $obj["SCR"]      ." download>Screenshots</a></td>";
                                                    echo "<td id='Icon$num'> <a href = "      . $obj["Icon"]     ." download>Icons</a></td>";
                                                    echo "<td id='CD$num'> <a href = "      . $obj["CD"]       ." download>Cover Designs</a></td>";
                                                    echo "<td id='APK$num'> <a href = "      . $obj["APK"]      ." download>APK</a></td>";
                                                    echo "<td id='Rev$num'>"                 . $obj["Review"]     ."</td>";
                                                    echo "<td id='ORev$num'>"                 . $reviewPrintN/$reviewNum     ."</td>";
                                                    echo "<td id='Id$num'>"                  . $obj["id"]     ."</td>";
                                                echo "</tr>";
                                                echo "<div class='card cardS' style='width: 18rem;' id=Card$num>";
                                                    echo "<img src=" . $obj['CD'] . " class='card-img-top' alt='...'>";
                                                    echo "<div class='card-body'>";
                                                        echo "<h5 class='card-title'>". $obj["Emri"] ."</h5>";
                                                        echo "<p class='card-text'>". $obj["Short"] ."</p>";
                                                    echo "</div>";
                                                    echo "<ul class='list-group list-group-flush'>";
                                                        echo "<li class='list-group-item'>". $obj["username"] ."</li>";
                                                    echo "</ul>";
                                                    echo "<div class='card-bot'>";
                                                        echo "<a href='#' class='card-link' id=CL$num>View More</a>";
                                                        echo "<img src='images/app.png' class='icons'>";
                                                    echo "</div>";
                                                echo "</div>";
                                                    }
                                                $query = $con->prepare("SELECT * FROM code_projekte");
                                                $query->execute();
                                                $projekte = $query->fetchAll();
                                                foreach ($projekte as $obj) {
                                                    $num++;
                                                echo "<div class='card cardS' style='width: 18rem;' id=Card$num>";
                                                    echo "<img src=images/codeCover.png class='card-img-top' alt='...'>";
                                                    echo "<div class='card-body'>";
                                                        echo "<h5 class='card-title'>". $obj["Emri"] ."</h5>";
                                                        echo "<p class='card-text'>". $obj["Short"] ."</p>";
                                                    echo "</div>";
                                                    echo "<ul class='list-group list-group-flush'>";
                                                        echo "<li class='list-group-item'>". $obj["username"] ."</li>";
                                                    echo "</ul>";
                                                    echo "<div class='card-bot'>";
                                                        echo "<a href=". $obj['Link'] ." class='card-link'>View Project</a>";
                                                        echo "<img src='images/code.png' class='icons'>";
                                                    echo "</div>";
                                                echo "</div>";
                                                }
                                                $query = $con->prepare("SELECT * FROM scratch_projekte");
                                                $query->execute();
                                                $projekte = $query->fetchAll();
                                                foreach ($projekte as $obj) {
                                                    $num++;
                                                    $url1 = "http://cdn2.scratch.mit.edu/get_image/project/";
                                                    $urlCode = str_replace("https://scratch.mit.edu/projects/","",$obj["Link"]);
                                                    $urlCode = str_replace("/", "", $urlCode);
                                                    $url2 = "_400x240.png";
                                                echo "<div class='card cardS' style='width: 18rem;' id=Card$num>";
                                                    echo "<img src=".$url1 . $urlCode . $url2." class='card-img-top' alt='...'>";
                                                    echo "<div class='card-body'>";
                                                        echo "<h5 class='card-title'>". $obj["Emri"] ."</h5>";
                                                        echo "<p class='card-text'>". $obj["Short"] ."</p>";
                                                    echo "</div>";
                                                    echo "<ul class='list-group list-group-flush'>";
                                                        echo "<li class='list-group-item'>". $obj["username"] ."</li>";
                                                    echo "</ul>";
                                                    echo "<div class='card-bot'>";
                                                        echo "<a href=". $obj['Link'] ." class='card-link' target='_blank'>View Project</a>";
                                                        echo "<img src='images/Scratch_Cat.png' class='icons'>";
                                                    echo "</div>";
                                                echo "</div>";
                                                }
                                                $query = $con->prepare("SELECT * FROM kodu_projekte");
                                                $query->execute();
                                                $projekte = $query->fetchAll();
                                                foreach ($projekte as $obj) {
                                                    $num++;
                                                    $url1 = "http://cdn2.scratch.mit.edu/get_image/project/";
                                                    $urlCode = str_replace("https://scratch.mit.edu/projects/","",$obj["Link"]);
                                                    $urlCode = str_replace("/", "", $urlCode);
                                                    $url2 = "_400x240.png";
                                                    if ($obj["Link"] == "") {
                                                        $projektK = $obj["File"];
                                                    }else{
                                                        $projektK = $obj["Link"];
                                                    }
                                                echo "<div class='card cardS' style='width: 18rem;' id=Card$num>";
                                                    echo "<img src=images/koduC.jpeg class='card-img-top' alt='...'>";
                                                    echo "<div class='card-body'>";
                                                        echo "<h5 class='card-title'>". $obj["Emri"] ."</h5>";
                                                        echo "<p class='card-text'>". $obj["Short"] ."</p>";
                                                    echo "</div>";
                                                    echo "<ul class='list-group list-group-flush'>";
                                                        echo "<li class='list-group-item'>". $obj["username"] ."</li>";
                                                    echo "</ul>";
                                                    echo "<div class='card-bot'>";
                                                        echo "<a href=". $projektK ." class='card-link' target='_blank'>View Project</a>";
                                                        echo "<img src='images/kodu.png' class='icons'>";
                                                    echo "</div>";
                                                echo "</div>";
                                                }
                                             ?>
                                        </tbody>
                                        <script src="js/admin.js"></script>
                                        <script type="text/javascript">
                                        var count = <?php echo $num;   ?>;
                                        RatingS = {};
                                        for (var i = count; i >= 0; i--) {
                                            $("#Card" + i).appendTo("#mainD");
                                            if ($("#Rev" + i).text() == "11") {
                                               $("#Rev" + i).text("Not reviewed");
                                            }
                                        }
                                        $("#table").hide();
                                        $(".toggle-on").text("card");
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
                            <p id="emriAM"></p>
                            <br>
                            <h4 id="list-item-2">Emri I Dorezimit</h4>
                            <br>
                            <p id="emriDM"></p>
                            <br>
                            <h4>Short Description</h4>
                            <br>
                            <p id="sdM"></p>
                            <br>
                            <h4>Full Description</h4>
                            <br>
                            <p id="ldM"></p>
                            <h4 id="idM"></h4>
                            <a id="iconM" download>Icon</a>
                            <br>
                            <a id="scrM" download>Screenshot</a>
                            <br>
                            <a id="cdM" download>Cover Design</a>
                            <br>
                            <a id="apkM" download>APK</a>
                            <br>
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tableSort.js"></script>

</body>

</html>
<!-- end document-->
