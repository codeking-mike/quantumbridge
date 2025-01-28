<?php
include("auth.php");

if(isset($_POST['update23'])){
    
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    
     $id = $_POST['userid'];
  
 
    $result = mysqli_query($cxn, "UPDATE argent_client_db SET firstname='$fname', lastname='$lname', user_email='$email', user_password='$pass' WHERE user_id='$id'");
    
    if($result){
        $_SESSION['error'] = "Profile updated succesfully!"; 
							            header("location:profile.php");
                                        $stmt->close(); 
										exit(0);
    } 
    
}


?>