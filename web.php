<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <?php include 'components/head.php'; ?>
    <title>Web</title>


    <link rel="stylesheet" type="text/css" href="css/smalForm.css">

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
                                    <p class="h3 mb-4 text-center">Turn in Web Project</p>
                                    <form action="php/addProjectWeb.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- Default form contact -->
                                            <div>
                                                    <label for="textInput">Name of the project</label>
                                                    <input type="text" id="textInput" class="form-control mb-4" placeholder="" name="Name">
                                            </div>
                                            <div>
                                                    <label for="textInput">Link of the project</label>
                                                    <input type="text" id="textInput" class="form-control mb-4" placeholder="U can leave it blank." name="Link">
                                            </div>
                                            <div>
                                                    <label for="textarea">Short description</label>
                                                    <textarea id="textarea" class="form-control mb-4" placeholder="" name="Short" maxlength="80"></textarea>
                                            </div>
                                            <div>
                                                    <label for="textarea">Full description</label>
                                                    <textarea id="textarea" class="form-control mb-4" placeholder="" name="Full" maxlength="300"></textarea>
                                            </div>
                                            <div style="display: flex;">
                                                <div class="input-group mb-4" style="margin-right: 5px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="ZipFile" aria-describedby="fileInput" name="ZIP">
                                                        <label class="custom-file-label" for="fileInput" id="apkLabel">zip File</label>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="Screenshot" aria-describedby="fileInput" name="SCR">
                                                        <label class="custom-file-label" for="fileInput" id="SCfile">Screenshot</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="alert alert-danger" role="alert" id="errorD"><?php echo $_SESSION["q_error"];$_SESSION["q_error"] = "";?></div>
                                    <button class="btn btn-info btn-block col-5 text-center" type="submit" name="submit" id="btnS">Send</button>
                                    </form>
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
    <script type="js/jquery.checkImageSize.js"></script>
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
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script src="js/web.js"></script>
    <script type="text/javascript">
        $("li:nth-child(6)").attr("class","active has-sub")
        if ($("#errorD").text() != "Please input a image that suits a cover (it needs to be horizontal)." && $("#errorD").text() != "There was a problem uploading your file.") {
            $("#errorD").hide();
            console.log($("#errorD").text());
        }
    </script>


</body>

</html>
<!-- end document-->
