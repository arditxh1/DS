<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>

    <title>November Code Fest</title>

    <link rel="stylesheet" type="text/css" href="css/smalForm.css">
    <link rel="stylesheet" type="text/css" href="css/ncf.css">

</head>

<?php  
    require_once('components/userBlock.php');
?>

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
                        <?php require_once('components/sidebar.php');?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
        <?php  require_once("components/header.php")?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 ">
                                <div class="au-card d-flex justify-content-center flex-column">
                                    <p class="h1 mb-4 text-center">November Code Fest</p>
                                    <div id="contentN" style="margin-top: 50px; display: flex;" >
                                        <img src="images/ncfB.jpg" style="max-width: 40%; box-shadow: 1px 1px 10px 0px; margin: 0px 20px;">
                                        <p style="font-size: 22px;">November Code Fest, garo me projekte deri me datën 30 Nëntor ne këto kategori: <br>
                                            1.Krijo lojë në <a href="code.php"><b><span id="codeNCF">CODE</span></a></b><br>
                                            2.Krijo lojë në <a href="scratch.php"><b><span id="scratchNCF">SCRATCH</span></a></b><br>
                                            3.Krijo lojë në <a href="kodu.php"><b><span id="koduNCF">KODU</span></a></b><br>
                                            4.Krijo lojë në <a href="stencyl.php"><b><span id="stencylNCF">STENCYL</span></a></b><br>
                                            5.Krijo aplikacion në <a href="dashboard.php"><b><span id="appNCF">ANDROID</span></a></b><br>
                                            6.Krijo <a href="web.php"><b><span id="webNCF">WEBFAQE</span></a></b><br>
                                            Vendet e para fitojnë <b><span style="color: #E50000">3 muaj</span></b> pa pagesë.<br>Cmimi kryesor <b><span style="color: #E50000;">Spring Camp</span></b> pa pagese!
                                        </p>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p id="warningP"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/checkNovember.js"></script>
    <script type="text/javascript">$("li:nth-child(10)").attr("class","active has-sub")</script>



</body>

</html>
<!-- end document-->
