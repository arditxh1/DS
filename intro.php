<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/intro.css">

    <link rel="stylesheet" type="text/css" href="css/customModal.css">

    <!-- Bootstrap Modal -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<?php  
    require_once('components/userBlock.php');
?>
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
        </header>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float: right;">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="php/logout.php"><?php echo $_SESSION["username"]; ?></a>
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
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 ">
                                <div class="au-card d-flex justify-content-center flex-column" cl>
                                    <h1 id="titleI">Choose your project type: </h1>
                                    <div id="introDiv">
                                        <a href="code.php" class="introD">
                                            <img src="images/code.png" draggable="false">
                                        </a>
                                        <a href="scratch.php" class="introD">
                                            <img src="images/scratch.png"draggable="false" id="scratch">
                                        </a>
                                        <a href="kodu.php" class="introD">
                                            <img src="images/kodu.png"draggable="false">
                                        </a>
                                        <a href="stencyl.php" class="introD">
                                            <img src="images/stencyl.png"draggable="false">
                                        </a>
                                        <a href="dashboard.php" class="introD">
                                            <img src="images/app.png" draggable="false">
                                        </a>
                                        <a href="web.php" class="introD">
                                            <img src="images/web.png" draggable="false">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="justify-content: center; align-items: center;">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="min-width: 800px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">November Code Fest is coming!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="display: flex; justify-content: center; align-items: center;">
            <div id="mText" style="width: 50%;">
                 <h1 id="title">NOVEMBER <br> CODE FEST</h1>
                 <p id="titleD">Time is tiking. Only</p>
                 <div style="display: flex; justify-content: flex-start; align-items: baseline;">
                    <h1 id="days">5</h1>
                    <p id="daysD">days left to participate.</p>
                 </div>
             </div>
             <div style="width: 50%;">
                 <img src="images/ncf.svg">
             </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
            <button type="button" class="btn btn-info" data-dismiss="modal" id="NCFB">Join Now</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Jquery JS-->
    <script type="text/javascript">
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        if (month == 10) {
            $("#myModal").modal("show");
        }
        $("#days").text(31 - day);
        $("#NCFB").click(function(){
            window.location.replace("ncf.php")
        })
    </script>
    <!-- Bootstrap JS-->
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>


</body>

</html>
<!-- end <document--></document-->