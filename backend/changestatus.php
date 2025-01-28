<?php
include("functions/auth.php");
if(isset($_GET['ld'])){
    
    $ld = $_GET['ld'];
	$gid = $_GET['gid'];
    
    $result = mysqli_query($cxn, "UPDATE lms_users_db SET group_status='Leader' WHERE id='$ld'");
    
    if($result){
        $_SESSION['error'] = "New Group Leader Assigned!"; 
							            header("location:viewgroup.php?id=$gid");
                                        $stmt->close(); 
										exit(0);
    }
    
}

if(isset($_GET['ald'])){
    
    $ld = $_GET['ald'];
	$gid = $_GET['gid'];
    
    $result = mysqli_query($cxn, "UPDATE lms_users_db SET group_status='Assistant' WHERE id='$ld'");
    
    if($result){
        $_SESSION['error'] = "New Group Assistant Assigned!"; 
							            header("location:viewgroup.php?id=$gid");
                                        $stmt->close(); 
										exit(0);
    }
    
}




?>