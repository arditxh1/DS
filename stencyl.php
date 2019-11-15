<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
    <title>Stencyl</title>

    <link rel="stylesheet" type="text/css" href="css/smalForm.css">

</head>

<?php  
    include 'php/dbh.php';

    if (empty($_SESSION["username"])) {
        header('location: login.php');
    }
    $userReg = $_SESSION["username"];
    $sql = "SELECT id FROM users WHERE username= :username";
    $insertSql = $con->prepare($sql);
    $insertSql->bindParam(':username', $userReg);
    $insertSql->execute();
    $data = $insertSql->fetch();
    $_SESSION["id"] = $data["id"];
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
                    <ul class="list-unstyled navbar__list" id="sideL">
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
                                    <p class="h3 mb-4 text-center">Turn in Stencyl Project</p>
                                    <form action="php/addProjectStencyl.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- Default form contact -->
                                            <div>
                                                    <label for="textInput">Name of the project</label>
                                                    <input type="text" id="textInput" class="form-control mb-4" placeholder="" name="Name" required>
                                            </div>

                                            <div>
                                                    <label for="textarea">Link of the project</label>
                                                    <textarea id="textarea" class="form-control mb-4" placeholder="" name="Short" maxlength="80" required></textarea>
                                            </div>
                                            <div style="display: flex;">
                                                <div class="input-group mb-4" style="margin-right: 5px;">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="fileSten" aria-describedby="fileInput" name="File" required>
                                                        <label class="custom-file-label" for="fileInput" id="apkLabel">Project File</label>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="SCfile" aria-describedby="fileInput" name="SCR" required>
                                                        <label class="custom-file-label" for="fileInput" id="scLabel">Screenshot</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ncfInput" style="display: none;">
                                                <label for="textarea">Do you want to use this project for November Code Fest</label>
                                                <select class="form-control" style="max-width: 200px;" name="ncf">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-info btn-block col-5 text-center" type="submit" name="submit" id="btnS">Send</button>
                                        </div>
                                    <div class="alert alert-danger" role="alert" id="errorD"><?php echo $_SESSION["q_error"];$_SESSION["q_error"] = "";?></div>
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
    <script type="text/javascript">
    $(document).ready(function(){
        if ($("#errorD").text() != "Please input a image that suits a cover (it needs to be horizontal)." && $("#errorD").text() != "There was a problem uploading your file.") {
            $("#errorD").hide();
            console.log($("#errorD").text());
        }
        $("li:nth-child(4)").attr("class","active has-sub");
        $('#fileSten').change(function(e){
            var fileName = e.target.files[0].name;
            var ext = fileName.substr(fileName.length - 7);
            if (ext != "stencyl") {
                $("#warningP").text("Please input a stencyl file.")
                $('#myModal').modal();
                $('#fileSten').val("");
            }else{
                $("#apkLabel").text(fileName);
            }
        });
        $('#SCfile').change(function(e){
            var fileName = e.target.files[0].name;
            var ext = fileName.substr(fileName.length - 3);
            if (ext != "png" && ext != "jpg") {
                $("#warningP").text("Please input a image file.")
                $('#myModal').modal();
                $('#scLabel').val("");
            }else{
                $("#scLabel").text(fileName);
            }
        });
    });
    </script>


</body>

</html>
<!-- end document-->
