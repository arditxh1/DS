<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>

    <title>Scratch</title>

    <link rel="stylesheet" type="text/css" href="css/smalForm.css">

</head>

<?php  
    require_once('components/userBlock.php');
    $_SESSION["PrType"] = "scratch_projekte";
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
                                    <p class="h3 mb-4 text-center">Turn in Scratch Project</p>
                                    <form action="php/addProjectCode.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- Default form contact -->
                                            <div>
                                                    <label for="textInput">Name of the project</label>
                                                    <input type="text" id="textInput" class="form-control mb-4" placeholder="" name="Name" required>
                                            </div>
                                            <div>
                                                    <label for="textInput">Link of the project</label>
                                                    <input type="url" id="textInput" class="form-control mb-4" placeholder="" name="Link" required>
                                            </div>
                                            <div>
                                                    <label for="textarea">Short description</label>
                                                    <textarea id="textarea" class="form-control mb-4" placeholder="" name="Short" maxlength="80" required></textarea>
                                            </div>
                                    </div>
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
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>
    <script type="text/javascript">$("li:nth-child(2)").attr("class","active has-sub")</script>


</body>

</html>
<!-- end document-->
