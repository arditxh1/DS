<?php  
	require_once('dbh.php');

	$idL = $_SESSION_["id"];
    
    $query = $con->prepare("SELECT id FROM comments");
    $query->execute();
    $comments = $query->fetchAll();
    if (is_null($_SESSION['oldComment'])) {
    	$_SESSION['oldComment'] = $comments;
    }elseif($_SESSION['oldComment'] != $comments) {
    	$_SESSION['oldComment'] = $comments;
	    $query = $con->prepare("SELECT * FROM comments");
	    $query->execute();
	    $commentsS = $query->fetchAll();
	    $indexT = sizeof($commentsS) - 1;
	    $commentsS = $commentsS[$indexT];
	    $myJson = json_encode($commentsS);
    	echo $myJson;
    }elseif($_SESSION['oldComment'] == $comments) {
    	$_SESSION['oldComment'] = $comments;
    };
?>