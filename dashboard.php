<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php include 'components/head.php'; ?>
    
    <!-- Title Page-->
    <title>Apps</title>

    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

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
                                    <p class="h3 mb-4 text-center">Turn in Aplikacionin</p>
                                    <form action="php/addProject.php" method="POST" enctype="multipart/form-data">
                                    <div class="row " >
                                        <!-- Default form contact -->
                                        <div class="border border-light p-5 col-6">

                                            <label for="textInput">Name of the project</label>
                                            <input type="text" id="textInput" class="form-control mb-4" placeholder="" name="Name" required>

                                            <label for="textarea">Short description</label>
                                            <textarea id="textarea" class="form-control mb-4" placeholder="" name="Short" maxlength="80" required></textarea>

                                            <label for="textarea">Full description</label>
                                            <textarea id="textarea" class="form-control mb-4" placeholder="" name="Long" required></textarea>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="fileInputAPK" aria-describedby="fileInput" name="APK" required>
                                                    <label class="custom-file-label" for="fileInput" id="apkLabel">APK File</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="border border-light p-5 col-6 ">

                                            <label for="textInput">App's Screenshots</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input imgInp" id="1" aria-describedby="fileInput" name="SCR" id="1" required>
                                                    <label class="custom-file-label" for="fileInput" id="N1">Img File</label>
                                                </div>
                                            </div>
                                            <label for="textInput">Icon </label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input imgInp" id="2" aria-describedby="fileInput" name="Icon" id="2" required>
                                                    <label class="custom-file-label" for="fileInput" id="N2">Img File</label>
                                                </div>
                                            </div>
                                            <label for="textInput">Cover design</label>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input imgInp" id="3" aria-describedby="fileInput" name="Cover" id="3" required>
                                                    <label class="custom-file-label" for="fileInput" id="N3">Img File</label>
                                                </div>
                                            </div>
                                            <div id="ncfInput" style="display: none;">
                                                <label for="textarea">Do you want to use this project for November Code Fest</label>
                                                <select class="form-control" style="max-width: 200px;" name="ncf">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger" role="alert" id="errorD"><?php echo $_SESSION["q_error"];$_SESSION["q_error"] = "";?></div>
                                    <button class="btn btn-info btn-block col-5 text-center" type="submit" name="submit">Send</button>
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
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/checkNovember.js"></script>
    <script type="text/javascript">$("li:nth-child(5)").attr("class","active has-sub")
        if ($("#errorD").text() != "Please input a image that suits a cover (it needs to be horizontal).") {
            $("#errorD").hide();
        }</script>



</body>

</html>
<!-- end document-->
