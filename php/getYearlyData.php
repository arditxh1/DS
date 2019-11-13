<?php  
	require_once('dbh.php');
    
    $query = $con->prepare("SELECT * FROM yearly_data");
    $query->execute();
    $data = $query->fetchAll();
    
    echo json_encode($data);
?>