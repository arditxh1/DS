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
    <link rel="icon" href="images/logoIcon.png">
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
    <script src="vendor/jquery-3.2.1.min.js"></script>
<?php  
    require_once('components/adminBlock.php');
?>
<script src="vendor/jquery-3.2.1.min.js"></script>
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
                        <li class="active has-sub">
                            <a href="dashboardAdmin.php">
                                <i class="fas fa-mobile" ></i>Projects</a>
                        </li>
                        <li>
                            <a href="dashboardAdminPending.php">
                                <i class="fas fa-users"></i>Pending Projects</a>
                        </li>
                        <li>
                            <a href="dashboard2.php">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="addUser.php">
                                <i class="fas fa-user-plus"></i>Add user</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
                <?php  include("components/header.php")?>
            <!-- HEADER DESKTOP-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 20px; padding-right: 20px;">
                            <!-- Example single danger button -->
                            <div class="form-inline md-form form-sm mt-0 searchD">
                              <i class="fas fa-search" aria-hidden="true"></i>
                              <input type="text" placeholder="Search" aria-label="Search" id="searchI">
                            </div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item FilterB" id="codeF" href="#">Code</a>
                                <a class="dropdown-item FilterB" id="scratchF" href="#">Scratch</a>
                                <a class="dropdown-item FilterB" id="koduF" href="#">Kodu</a>
                                <a class="dropdown-item FilterB" id="stencylF" href="#">Stencyl</a>
                                <a class="dropdown-item FilterB" id="appF" href="#">App Inventor</a>
                                <a class="dropdown-item FilterB" id="webF" href="#">Web</a>
                                <a class="dropdown-item FilterB" id="wordF" href="#">Wordpress</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item FilterB active" href="#" id="allF">All</a>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <div id="mainD" class="au-card" style="display: flex; flex-direction: row; flex-wrap: wrap;"></div>
                                <div class="table-responsive table--no-card m-b-30">
                                     <script type="text/javascript">
                                        
                                        var code_Obj = {};
                                        <?php
                                            $usernameQ = $_SESSION["id"];
                                            $codeN=-1;
                                            $query = $con->prepare("SELECT * FROM code_projekte WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $codeN++ ?> 
                                            code_Obj["<?php echo "$codeN";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "link": `<?php echo $obj["Link"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>


                                        var scratch_Obj = {};
                                        <?php
                                            $scratchN=-1;
                                            $query = $con->prepare("SELECT * FROM scratch_projekte  WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $scratchN++ ?> 
                                            scratch_Obj["<?php echo "$scratchN";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "link": `<?php echo $obj["Link"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>


                                        var kodu_Obj = {};
                                        <?php
                                            $koduN=-1;
                                            $query = $con->prepare("SELECT * FROM kodu_projekte WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $koduN++ ?> 
                                            kodu_Obj["<?php echo "$koduN";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "file": `<?php echo $obj["File"];?>`,
                                                    "link": `<?php echo $obj["Link"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>


                                        var stencyl_Obj = {};
                                        <?php
                                            $stenN=-1;
                                            $query = $con->prepare("SELECT * FROM stencyl_projekte WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $stenN++ ?> 
                                            stencyl_Obj["<?php echo "$stenN";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "file": `<?php echo $obj["File"];?>`,
                                                    "SCR": `<?php echo $obj["SCR"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>


                                        var app_Obj = {};
                                        <?php
                                            $appN=-1;
                                            $query = $con->prepare("SELECT * FROM projekete_app WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $appN++ ?> 
                                            app_Obj["<?php echo "$appN";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "full": `<?php echo $obj["Full"];?>`,
                                                    "SCR": `<?php echo $obj["SCR"];?>`,
                                                    "Icon": `<?php echo $obj["Icon"];?>`,
                                                    "CD": `<?php echo $obj["CD"];?>`,
                                                    "APK": `<?php echo $obj["APK"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>


                                        var html_Obj = {};
                                        <?php
                                            $query = $con->prepare("SELECT * FROM web_projekte WHERE approved = 1");
                                            $query->execute();
                                            $projekte = $query->fetchAll();
                                        ?>
                                        <?php $html=-1?>
                                        <?php foreach ($projekte as $obj) {?>
                                            <?php $html++ ?> 
                                            html_Obj["<?php echo "$html";?>"] = {
                                                    "id": `<?php echo $obj["id"];?>`,
                                                    "name": `<?php echo $obj["Emri"];?>`,
                                                    "short": `<?php echo $obj["Short"];?>`,
                                                    "full": `<?php echo $obj["Full"];?>`,
                                                    "file": `<?php echo $obj["File"];?>`,
                                                    "link": `<?php echo $obj["Link"];?>`,
                                                    "user_id": `<?php echo $obj["user_id"];?>`,
                                                    "username": `<?php echo $obj["username"];?>`,
                                                    "SCR": `<?php echo $obj["screenshot"];?>`,
                                                    "review": `<?php echo $obj["Review"];?>`,
                                                    "type": `<?php echo $obj["type"];?>`,
                                                    "badges": `<?php echo $obj["badges"];?>`
                                            }
                                        <?php } ?>

                                        var all_projects = {code_Obj, scratch_Obj, kodu_Obj, stencyl_Obj, app_Obj, html_Obj}

                                     </script>
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
                                <script src="js/admin.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                            <a class="list-group-item list-group-item-action active" href="#list-item-1">Name of the project</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Made by</a>
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
                        <div class="col-8" style="display: flex; flex-direction: column; height: 600px; overflow: scroll;"  id="modal-body-b">
                            <div data-target="#list-example" data-offset="0" id="modal-body-b">
                                <h4 id="list-item-1">Name of the project</h4>
                                    <p id="nameM"></p>
                                <h4 id="list-item-2">Made by</h4>
                                    <p id="usernameM"></p>
                                <h4 id="list-item-3">Short Description</h4>
                                    <p id="shortM"></p>
                                <h4 id="fullDesc">Full Description</h4>
                                    <p id="longM"></p>
                                <h4 id="pubRev">Public review</h4>
                                    <p id="pubRevP"></p>
                                <h4 id="admRev">Admin review</h4>
                                    <p id="admRevP"></p>  
                                <h4 style="display: none;">Id</h4>
                                    <p id="idM"></p>
                                <h4 id="LinkT"><a href="" id="linkF" target="_blank">Link</a></h4>
                                    <p id="linkM"></p>
                                <div class="previews" style="display: flex; flex-direction: column;">
                                <a id="iconM" class="linkMS" download>Icon</a>
                                    <div class="imgPrev" id="iconP"><img src="" id="iconMS"></div>
                                <a id="scrM" class="linkMS" download>Screenshot</a>
                                    <div class="imgPrev" id="scrP"><img src="" id="srcMS"></div>
                                <a id="cdM" class="linkMS" download>Cover Design</a>
                                    <div class="imgPrev" id="cdP"><img src="" id="cdMS"></div>
                                </div>
                                <a id="apkM" class="linkMS" download>APK</a>
                                <a id="fileM" class="linkMS" download>File</a>
                                <img src="" id="typeM">
                                <h4 id="badges" style="margin-top: auto; margin-bottom: 0 !important;">Badges</h4>
                                <div class="btn-group" style="display: flex; align-items: center;">
                                  <button type="button" class="btn btn-primary" style="max-height: 40px;" id="addBadge">Add</button>
                                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="max-height: 40px;">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" id="bDesign">Best Design</a>
                                    <a class="dropdown-item" id="bCode">Best Code</a>
                                    <a class="dropdown-item" id="bIdea">Best Idea</a>
                                </div>

                                <div id="modalBadges">
                                    <img class="badges designBadge" src="images/badge.png" id="designBM">
                                    <img class="badges designBadge" src="images/codeB.png" id="codeBM">
                                    <img class="badges designBadge" src="images/ideaB.png" id="ideaBM">
                                </div>
                            <!--Stars -->
                            <style type="text/css">
                            #half-stars-example .rating-group {
                              display: flex;
                              justify-content: center;
                              align-items: center;
                            }
                            #half-stars-example .rating__icon {
                              pointer-events: none;
                            }
                            #half-stars-example .rating__input {
                              position: absolute !important;
                              left: -9999px !important;
                            }
                            #half-stars-example .rating__label {
                                cursor: pointer;
                                margin: 0;
                                padding: 0 0.1em;
                                font-size: 3rem;
                                line-height: 0;
                            }
                            #half-stars-example .rating__label--half {
                                padding: 0;
                                margin: 0;
                                line-height: 0;
                                margin-right: -0.4em;
                                z-index: 3;
                                max-width: 16px !important;
                                line-height: 0;
                            }
                            #half-stars-example .rating__icon--star {
                              color: #007bff;
                            }
                            #half-stars-example .rating__icon--none {
                              color: #eee;
                            }
                            #half-stars-example .rating__input--none:checked + .rating__label .rating__icon--none {
                              color: red;
                            }
                            #half-stars-example .rating__input:checked ~ .rating__label .rating__icon--star {
                              color: #ddd;
                            }
                            #half-stars-example .rating-group:hover .rating__label .rating__icon--star,
                            #half-stars-example .rating-group:hover .rating__label--half .rating__icon--star {
                              color:  #007bff;
                            }
                            #half-stars-example .rating__input:hover ~ .rating__label .rating__icon--star,
                            #half-stars-example .rating__input:hover ~ .rating__label--half .rating__icon--star {
                              color: #ddd;
                            }
                            #half-stars-example .rating-group:hover .rating__input--none:not(:hover) + .rating__label .rating__icon--none {
                              color: #eee;
                            }
                            #half-stars-example .rating__input--none:hover + .rating__label .rating__icon--none {
                              color: red;
                            }
                            </style>
                            <div id="half-stars-example" style="margin-left: auto; display: flex; justify-content: center; align-items: flex-end; flex-direction: column;">
                                <h3 id="starN" style="padding-right: 10px;">0</h3>
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
    <script src="js/main.js"></script>
    <script type="text/javascript">
    var badgePush;
    $("#bDesign").click(function(){
        badgePush = "design";
    });

    $("#bCode").click(function(){
        badgePush = "code";
    });

    $("#bIdea").click(function(){
        badgePush = "idea";
    });

    $("#addBadge").click(function(){
        var str = $("#idM").text();
        var idOfPr = str.replace("Id. ", "");
        $.post( "php/addBadge.php", 
            { 
                idOfPr: idOfPr,
                Badge: badgePush,
                RevType: RevType,
            },
        function(data,status){
            console.log(data);
            if (data == "Used") {
                alert("Project already has that badge.");
            }else{
                alert("Badge added");
                addBadge();
            }
        });
    });

    $("#addRev").click(function(){
        var rev = $("#starN").text();
        url = "php/review.php";
        id = dbId;
        type = dbType;

          $.post(url,
        {
            rev: rev, id: id, type: type
        },
        function(data,status){

        });
        curentPrRev["review"] = rev;
        //location.reload();
    });
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
    var receiver_id;
    $("#btnCS").click(function(){
        numC++
        var str = $("#idM").text();
        var Message = $("#commentI").val();
        var idOfPr = str.replace("Id. ", "");
        $("#commentI").val("");
        $("#clone-comment").clone(true).appendTo("#modalLeft").attr("id","comment" + numC);
        $("#comment" + numC).addClass("commentR");
        $("#comment" + numC).find(".messageS").text(Message);
        $("#comment" + numC).find(".username").text(usernameC);
        $("#comment" + numC).find(".time").text(date);
        $.post( "php/addComment.php", 
        { 
            idOfPr: idOfPr,
            TypeOfPr: $typeCo,
            Message: Message,
            date: date,
            receiver_id: receiver_id
        });
    })
    $("#commentI").focusout(function(){
         setTimeout(function(){        
        $("#btnCS").css({"width": "0px" ,"opacity": "0"});

    }, 150);
    })

//TODO review load
$("#closeM").click(function(){
    $("#rating" + latestRev).removeAttr("checked");
});

$('#myModal').on('hidden.bs.modal', function (e) {
    $("#rating" + latestRev).removeAttr("checked");
    $("#ideaBM").hide();
    $("#codeBM").hide();
    $("#designBM").hide();
});


</script>

</body>

</html>
<!-- end document-->
