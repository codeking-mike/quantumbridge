<?php
session_start();
 include("functions/auth.php");
 
 
 
if(isset($_GET['id'])){
    
    $user = $_GET['id'];
    mysqli_query($cxn, "UPDATE lms_users_db SET subscribed='yes' WHERE id = '$user'");
    $_SESSION['error'] = "User has been activated!";
    header("location:users.php");
    exit(0);
}






?>