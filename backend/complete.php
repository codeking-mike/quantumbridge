<?php
include("auth.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
	$dt = date("Y-m-d");
    mysqli_query($conn, "UPDATE client_withdrawals SET completed='yes', date_withdrawn='$dt' WHERE with_id='$id'");
   
    $message = "PAY OUT SUCCESSFUL!";
    $_SESSION['error'] = $message;
    header("location:withdrawal.php");
    exit(0);
    
    
}


if(isset($_GET['bon'])){
    $id = $_GET['bon'];
    $user = $_GET['user'];
     mysqli_query($cxn, "UPDATE bonus_withdrawals SET completed='yes', date_withdrawn='$dt' WHERE with_id='$id'");
    mysqli_query($cxn, "UPDATE ref_bonus SET amount='0.00' WHERE receiver='$user'");
    $message = "BONUS PAY OUT SUCCESSFUL!";
    $_SESSION['error'] = $message;
    header("location:index.php");
    exit(0);
}


?>