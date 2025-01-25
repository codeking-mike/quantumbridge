<?php
include_once('auth.php');

//CHANGE MOBILE WALLET
if(isset($_POST['update_wallet'])){
	
	
    $btc = $_POST['btc'];
	$eth = $_POST['eth'];
	$usdt= $_POST['usdt'];
	 $userid = $_POST['userid'];
	
	
    
    $result = mysqli_query($conn, "UPDATE fx_client_db SET btc_wallet='$btc', eth_wallet='$eth', usdt_wallet='$usdt' WHERE user_id='$userid'");
    
    if($result){
        $_SESSION['error'] = "Withdrawal wallets added succesfully!"; 
							            header("location:changemethod.php"); 
										exit(0);
    }
	
    
}

//CHANGE PASSWORD
if(isset($_POST['update_pass'])){

	
    foreach($_POST as $field => $value) {
       if($field != "update_pass"){
  
  
  if(preg_match("/password/i",$field)){
  if(!preg_match("/^[A-Za-z0-9#@' -]{6,50}$/",$value)){
      $errors[] = "{$value} is not a valid password or password too short. Minimum of 6 xters allowed";
  }
  }
  
  
           
           }
      }
     if(@is_array($errors)){
  $message = "";
  foreach($errors as $value){
  $message .= $value." Please try again<br />";
  $_SESSION['error']= $message;
  }
  header("location:changepassword.php");
  exit();
       } 

$old_pass = $_POST['old_pass'];
$new_pass = $_POST['pass'];
$userid = $_POST['userid'];

if($old_pass === $user_password){


$result = mysqli_query($conn, "UPDATE fx_client_db SET user_password='$new_pass'  WHERE user_id='$userid'");

if($result){
  $_SESSION['error'] = "Password changed succesfully!"; 
                                  header("location:changepassword.php");
                                  exit(0);
}
}else{
  
   $_SESSION['error'] = "Your Password does not tally with our records. Try again later"; 
                                  header("location:changepassword.php");
                                  $stmt->close(); 
                                  exit(0);
  
}

}

if(isset($_GET['cancel'])){
	$trans = $_GET['cancel'];
	
	mysqli_query($cxn, "DELETE FROM client_investment WHERE fund_id ='$trans'");
	 $_SESSION['error'] = "Investment Canceled Successfully!"; 
							            header("location:dashboard.php");
                                        $stmt->close(); 
										exit(0);
	
	
}

//UPDATE USER DETAILS
if(isset($_POST['update_user'])){
	
	
    $lastname = $_POST['lname'];
	$email = $_POST['email'];
	$firstname = $_POST['fname'];
	$phone = $_POST['phone'];
    $country = $_POST['country'];
	$user_id = $_POST['userid'];
	
	
    $result = mysqli_query($conn, "UPDATE fx_client_db SET user_email='$email', firstname='$firstname', lastname='$lastname', phone_no='$phone', country='$country' WHERE user_id='$user_id'");
    
    if($result){
        $_SESSION['success'] = "Profile Updated succesfully!"; 
							            header("location:profile.php");
										exit(0);
    }
	
    
}
