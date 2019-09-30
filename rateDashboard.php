<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>

    <title>Rate</title>

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="vendor/jquery-3.2.1.min.js"></script>

</head>

<?php  
    require_once('components/userBlock.php');
?>

<body class="animsition">
    <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Shkolla DIgjitale" />
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
        <div class="page-container">
        <?php  require_once("components/header.php")?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12 ">
                                <div class="au-card d-flex justify-content-center flex-column">
                                    <p class="h3 mb-4 text-center">Rate Projects</p>
                                    <div class="row" id="mainD" style="display: flex; flex-direction: row; flex-wrap: wrap;">
                                    <div class='card cardS' style='width: 18rem;' id="CardC">
                                         <img src="images/codeCover.png" class='card-img-top imgC' alt='...'>
                                         <div class="badgesCon">
                                            <img class="badges designBadge" src="images/badge.png" id="designB">
                                            <img class="badges designBadge" src="images/codeB.png" id="codeB">
                                            <img class="badges designBadge" src="images/ideaB.png" id="ideaB">
                                        </div>
                                        <div class='card-body'>
                                             <h5 class='card-title'>Title</h5>
                                             <p class='card-text'>Descriptions</p>
                                         </div>
                                         <ul class='list-group list-group-flush'>
                                             <li class='list-group-item ownerPR'>Made By</li>
                                         </ul>
                                         <div class='card-bot'>
                                             <a class='card-link'>View More...</a>
                                             <img src='images/web.png' class='icons'>
                                         </div>
                                     </div>
                                     <script type="text/javascript">
                                        
                                        var code_Obj = {};
                                        <?php
                                            $usernameQ = $_SESSION["id"];
                                            $codeN=-1;
                                            $query = $con->prepare("SELECT * FROM code_projekte WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $codeN++ ?> 
                                            code_Obj["<?php echo "$codeN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "link": "<?php echo $obj["Link"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>


                                        var scratch_Obj = {};
                                        <?php
                                            $scratchN=-1;
                                            $query = $con->prepare("SELECT * FROM scratch_projekte WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $scratchN++ ?> 
                                            scratch_Obj["<?php echo "$scratchN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "link": "<?php echo $obj["Link"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>


                                        var kodu_Obj = {};
                                        <?php
                                            $koduN=-1;
                                            $query = $con->prepare("SELECT * FROM kodu_projekte WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $koduN++ ?> 
                                            kodu_Obj["<?php echo "$koduN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "file": "<?php echo $obj["File"];?>",
                                                    "link": "<?php echo $obj["Link"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>


                                        var stencyl_Obj = {};
                                        <?php
                                            $stenN=-1;
                                            $query = $con->prepare("SELECT * FROM stencyl_projekte WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $stenN++ ?> 
                                            stencyl_Obj["<?php echo "$stenN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "file": "<?php echo $obj["File"];?>",
                                                    "SCR": "<?php echo $obj["SCR"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>


                                        var app_Obj = {};
                                        <?php
                                            $appN=-1;
                                            $query = $con->prepare("SELECT * FROM projekete_app WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $appN++ ?> 
                                            app_Obj["<?php echo "$appN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "full": "<?php echo $obj["Full"];?>",
                                                    "SCR": "<?php echo $obj["SCR"];?>",
                                                    "Icon": "<?php echo $obj["Icon"];?>",
                                                    "CD": "<?php echo $obj["CD"];?>",
                                                    "APK": "<?php echo $obj["APK"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "Review": "<?php echo $obj["Review"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>


                                         var html_Obj = {};
                                        <?php
                                            $webN=-1;
                                            $query = $con->prepare("SELECT * FROM web_projekte WHERE user_id != $usernameQ");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $webN++ ?> 
                                            html_Obj["<?php echo "$webN";?>"] = {
                                                    "id": "<?php echo $obj["id"];?>",
                                                    "name": "<?php echo $obj["Emri"];?>",
                                                    "short": "<?php echo $obj["Short"];?>",
                                                    "full": "<?php echo $obj["Full"];?>",
                                                    "file": "<?php echo $obj["File"];?>",
                                                    "link": "<?php echo $obj["Link"];?>",
                                                    "user_id": "<?php echo $obj["user_id"];?>",
                                                    "username": "<?php echo $obj["username"];?>",
                                                    "SCR": "<?php echo $obj["screenshot"];?>",
                                                    "type": "<?php echo $obj["type"];?>",
                                                    "badges": "<?php echo $obj["badges"];?>"
                                            }
                                        <?php } ?>

                                        var all_projects = {code_Obj, scratch_Obj, kodu_Obj, stencyl_Obj, app_Obj, html_Obj}

                                     </script>
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

<script src="js/admin.js"></script>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document" style="margin: 1.75rem 28rem">
          <div class="modal-content" style="width: 1000px;">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Project of?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             </div>
             <form>
                <div class="modal-body" style="height:600px; overflow: hidden;">
                    <div class="row">
                        <div class="col-4" style="height: 600px; overflow:scroll; overflow-x: hidden;" id="modalLeft">
                          <div id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action active" href="#list-item-1">Emri I Aplikacionit</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Emri I Dorezimit</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-3">Short Description</a>
                            <a class="list-group-item list-group-item-action" href="#fullDesc">Full Description</a>
                          </div>
                          <div id="comments">
                            <div id="titleC" style="display: flex; align-items: center; justify-content: flex-start; margin-top: 30px;">
                                <i class="fas fa-comments"></i>
                                <h3>Comments</h3>
                            </div>
                            <div class="input-group mb-3"  style="margin-top: 30px;">
                              <input type="text" class="form-control" placeholder="Your commment" aria-label="Recipient's username" aria-describedby="basic-addon2" id="commentI">
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="btnCS">Enter</button>
                              </div>
                            </div>
                          </div>
                        <div class="single-comment" id="clone-comment">
                            <div class="top-single-comment" style="display: flex; align-items: flex-start;">
                                <div class="image-cropper">
                                    <img src="images/icon.jpg" class="profile_pic">
                                </div>
                                    <div style="margin-left: 10px;">
                                        <h4 class="username">Kujtim Nejziraj</h4>
                                        <p class="time">May 21 at 8:37 PM</p>
                                </div>
                            </div>
                            <div style="word-break: break-all; word-wrap: break-word;">
                                <p class="messageS">a</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-8" style="display: flex; flex-direction: column; height: 600px; overflow: scroll;" id="modalRight">
                          <div data-target="#list-example" data-offset="0" id="modal-body-b">
                                <h4 id="list-item-1">Emri I Aplikacionit</h4>
                                    <p id="nameM"></p>
                                <h4 id="list-item-2">Emri I Dorezimit</h4>
                                    <p id="usernameM"></p>
                                <h4 id="list-item-3">Short Description</h4>
                                    <p id="shortM"></p>
                                <h4 id="fullDesc">Full Description</h4>
                                    <p id="longM"></p>
                                <h4 style="display: none;">Id</h4>
                                    <p id="idM"></p>
                                <h4 id="LinkT"><a href="" id="linkF" target="_blank">Link</a></h4>
                                    <p id="linkM"></p>
                                <a id="iconM" class="linkMS" download>Icon</a>
                                    <div class="imgPrev" id="iconP"><img src="" id="iconMS"></div><br id="br1">
                                <a id="scrM" class="linkMS" download>Screenshot</a>
                                    <div class="imgPrev" id="scrP"><img src="" id="srcMS"></div><br>
                                <a id="cdM" class="linkMS" download>Cover Design</a>
                                    <div class="imgPrev" id="cdP"><img src="" id="cdMS"></div><br>
                                <a id="apkM" class="linkMS" download>APK</a>
                                <a id="fileM" class="linkMS" download>File</a>
                                <img src="" id="typeM">

                            <!--Stars -->
                            <link rel="stylesheet" type="text/css" href="css/stars.css">
                               <div id="half-stars-example" style="margin-left: auto; display: flex; justify-content: center; align-items: flex-end; flex-direction: column;">
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
    <style type="text/css">
        #modalLeft::-webkit-scrollbar { width: 0 !important }
        #modalRight::-webkit-scrollbar { width: 0 !important }
    </style>
    <!-- Jquery JS-->

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/user.js"></script>
    <script type="text/javascript">$("li:nth-child(9)").attr("class","active has-sub")
    $("#commentI").focus(function(){
        $("#btnCS").css({"width": "80px" ,"opacity": "1"})
    })
    const monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

    const d = new Date();
    var date = monthNames[d.getMonth()] + " " + d.getDate() + " at " + d.getHours() + ":" + d.getMinutes();
    var numC = 0;
    var usernameC = "<?php echo $_SESSION["username"];  ?>";
    $("#btnCS").click(function(){
        numC++
        var str = $("#idM").text();
        var Message = $("#commentI").val();
        var idOfPr = str.replace("Id. ", "");
        $("#commentI").val("");
        $("#clone-comment").clone(true).appendTo("#modalLeft").attr("id","comment" + numC);
        $("#comment" + numC).find(".messageS").text(Message);
        $("#comment" + numC).find(".username").text(usernameC);
        $("#comment" + numC).find(".time").text(date);
        $.post( "php/addComment.php", 
        { 
            idOfPr: idOfPr,
            TypeOfPr: $typeCo,
            Message: Message,
            date: date
        });
    })
    $("#commentI").focusout(function(){
         setTimeout(function(){        
        $("#btnCS").css({"width": "0px" ,"opacity": "0"});

    }, 150);
    })

</script>
</body>

</html>
<!-- end document-->
