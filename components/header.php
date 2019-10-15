<script src="vendor/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    var comments = {};
    var reviews = {};
    var numTemp = -1;
    <?php 
        $usernameL = $_SESSION['username'];
        $idL = $_SESSION['id'];
        $query = $con->prepare("SELECT * FROM comments WHERE receiver_id = $idL");
        $query->execute();
        $comments = $query->fetchAll();
        $notifi = -1;
        $tempNumC = -1;
        foreach ($comments as $comment) {
            $tempNumC++;
            if ($comment["checked"] == 0) {
                $notifi++;
            }
        ?>
                numTemp++
                comments["<?php echo $tempNumC;  ?>"] = {
                    "sender_id" : "<?php echo $comment["username"];  ?>",
                    "message" : "<?php echo $comment["Mesage"];  ?>",
                    "checked" : "<?php echo $comment["checked"];  ?>",
                    "time" : "<?php echo $comment["time"];  ?>",
                    "id" : "<?php echo $comment["id"];  ?>"
                }
            <?php 
        }
     ?>
    <?php 
        $usernameL = $_SESSION['username'];
        $idL = $_SESSION['id'];
        $query = $con->prepare("SELECT * FROM reviews INNER JOIN users ON reviews.UserId = users.id WHERE OwnerId = $idL");
        $query->execute();
        $reviews = $query->fetchAll();
        $tempNumC = -1;
        foreach ($reviews as $review) {
            $tempRevType = $review["RevType"];
            //CHANGE THE FUCKING NAME
            if ($tempRevType == "app_projekte") {
                $tempRevType = "projekete_app";
            }
            $tempPrId = (int)$review["PrId"];
            $query = $con->prepare("SELECT Emri FROM $tempRevType WHERE id = $tempPrId");
            $query->execute();
            $PrName = $query->fetchAll();
            $tempNumC++;
            if ($review["checked"] == 0) {
                $notifi++;
            }
        ?>
                numTemp++
                reviews["<?php echo $tempNumC;  ?>"] = {
                    "id" : <?php echo $review[0];  ?>,
                    "ProjectName" : "<?php echo $PrName[0][0];  ?>",
                    "review" : <?php echo $review["Review"];  ?>,
                    "checked" : <?php echo $review["checked"];  ?>,
                    "senderUsername" : "<?php echo $review["username"];  ?>",
                    "time" : "<?php echo $review["time"];  ?>"
                }
            <?php 
        }
     ?>
</script>
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap" style="float: right;">
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity"><?php echo $notifi + 1;  ?></span>
                        </div>
                    </div>
                    <div id="commentsContainer">
                        <div class="notifationsS" id="cloneNotifi">
                            <div class="notfica" style="padding: 10px;">
                                <i class="fa fa-envelope" width="32px" height="32px" style="font-size: 1.5em"></i>
                            </div>
                            <div id="text" style="padding: 5px;">
                                <p style="font-size: 18px;" id="message">Test ndreq bugin test</p>
                                <span id="date">April 12, 2018 06:50 by</span> <span id="name" style="font-weight: bold;">Kujtim Neziraj</span> 
                            </div>
                        </div>
                    <div class="emptyNotifi" id="emptyNoti">
                            <div class="notfica" style="padding: 10px;">
                                <i class="fa fa-star" width="32px" height="32px"></i>
                            </div>
                                <p style="font-size: 22px;">No notifications</p>
                        </div>
                        <div class="notifationsS" id="cloneNotifiStar">
                            <div class="notfica" style="padding: 10px;">
                                <i class="fa fa-bell" width="32px" height="32px" style="font-size: 1.5em"></i>
                            </div>
                            <div id="text" style="padding: 5px;">
                                <p style="font-size: 18px;" id="message">U got an 8 for "Testi i arritshmerris".</p>
                                <span id="date">April 12, 2018 06:50 by</span> <span id="name" style="font-weight: bold;">Kujtim Neziraj</span> 
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="php/logout.php"><?php echo $usernameL ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="notifcationOverlay">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" id="toastClone">
          <div class="toast-header">
            <img src="images/logoIcon.png" class="rounded mr-2" alt="..." width="20px" height="20px">
            <strong class="mr-auto" id="NameT">Kujtim Neziraj</strong>
            <small id="timeToast">11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close toastBtn" onclick="$(this).parent().parent().remove();">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body" id="toast-text">
            Please resend me the new changes.
          </div>
        </div>
    </div>
</header>

<script type="text/javascript">
    
    for (var i = Object.keys(comments).length - 1; i >= 0; i--) {
        $("#cloneNotifi").clone(true).appendTo("#commentsContainer").attr("id", "comments_" + i).addClass("");
        $("#" + "comments_" + i).find("#message").text(comments[i]["message"]);
        var nameTemp = comments[i]["sender_id"];
        $("#" + "comments_" + i).find("#date").text(comments[i]["time"] + " by ");
        $("#" + "comments_" + i).find("#name").text(comments[i]["sender_id"]);
        console.log(i);
    }

    if ($(".quantity").text() == "0") {
        $(".quantity").remove()
    }

    for (var i = Object.keys(reviews).length - 1; i >= 0; i--) {
        $("#cloneNotifiStar").clone(true).appendTo("#commentsContainer").attr("id", "reviews_" + i).addClass("");
        $("#" + "reviews_" + i).find("#message").text("U got a new review: " + reviews[i]["review"] + " for " + '"' +reviews[i]["ProjectName"]+ '"' );
        $("#" + "reviews_" + i).find("#date").text(reviews[i]["time"] + " by ");
        $("#" + "reviews_" + i).find("#name").text(reviews[i]["senderUsername"]);
        console.log(i);
    }

    if ($(".quantity").text() == "0") {
        $(".quantity").remove()
    }

numTempT = 0;
function yourFunction(){
    $.post("php/getToast.php", function(result){
        if ($.trim(result)) {
            console.log("nice");
            numTempT++;
            console.log(result);
            result = JSON.parse(result);
            $("#toastClone").clone(true).appendTo("#notifcationOverlay").attr("id", "toast_" + numTempT);
            var time = result["time"];
            var lastFiveTemp = time.substr(time.length - 5);
            $("#toast_" + numTempT).find("#NameT").text(result["username"]);
            $("#toast_" + numTempT).find("#timeToast").text(lastFiveTemp);
            $("#toast_" + numTempT).find("#toast-text").text(result["Mesage"]);
            $("#toast_" + numTempT).css("z-index",numTempT);
            $("#toast_" + numTempT).animate({right: "5rem"}); 
            console.log(result);
        }
    });

    setTimeout(yourFunction, 5000);
}

yourFunction();

</script>
<?php var_dump($_SESSION["id"]); ?>

<style type="text/css">

 #commentsContainer{
    width: 350px;
    position: absolute;
    top: 3.5rem;
    right: 13.1rem;
    z-index: 100;
    border: 1px solid rgba(0,0,0,.125);
    transition: .3s ease;
    background-color: white;
    box-shadow: 0px  0px 10px 0px;
    max-height: 0px;
    overflow-x: scroll;
    transition: .3s ease;
    opacity: 0;
}

::-webkit-scrollbar { 
    display: none; 
}

#date, #name{
    font-size: 12px;
}

.notifationsS{
    display: flex;
    padding: 7px 0px 7px 0px;
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.emptyNotifi{
    flex-direction: row;
    align-items: center;
    padding: 7px 0px 7px 0px;
    display: none;
}

.notifationsS::last-child{
    border: none;
}

#cloneNotifi{
    display: none;
}
#cloneNotifiStar{
    display: none;
}

#name{
    font-size: 15px;
}

.toast-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .25rem .75rem;
    color: #6c757d;
    background-color: rgba(255,255,255,.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0,0,0,.05);
}

.toast-body {
    padding: .75rem;
}

.toast.show {
    display: block;
    opacity: 1;
}

.toast {
    min-width: 250px;
    max-width: 350px;
    overflow: hidden;
    font-size: .875rem;
    background-color: rgba(255,255,255,.85);
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.1);
    border-radius: .25rem;
    box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.1);
    opacity: 0;
    position: absolute;
    z-index: 100;
    right: -100rem;
    top: 85vh; 
    transition: 2.5s ease;
}

#toastClone{
    display: none;
    position: absolute;
}


</style>

<script type="text/javascript">
    var checkedMess;
    $(".noti-wrap").click(function(){
        $(".quantity").remove()
        if ($("#commentsContainer").css("opacity") == "0") {
            $("#commentsContainer").css({"opacity":"1","height":"auto","transition":".3 ease","max-height":"481px"});
            checkedMess = true;
            for (var i = Object.keys(comments).length - 1; i >= 0; i--) {
                var currentCommentId = comments[i]["id"];
                  $.post("php/checkComments.php", {id: currentCommentId, type: "comments"});
            }
            for (var i = Object.keys(reviews).length - 1; i >= 0; i--) {
                var currentReviewtId = reviews[i]["id"];
                  $.post("php/checkComments.php", {id: currentReviewtId, type: "reviews"});
            }
        }else{
            $("#commentsContainer").css({"transition":".3 ease","opacity":"0","height":"0","max-height":"0px"});
        }
    })
    if ($("#commentsContainer > div").length <= 3) {
        $("#emptyNoti").css("display", "flex");
    }
</script>   