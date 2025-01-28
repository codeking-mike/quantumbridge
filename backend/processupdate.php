<?php
include("auth.php");

if(isset($_POST['update'])){
	
	
    $btc = $_POST['btc'];
     $eth = $_POST['eth'];
      $usdt = $_POST['usdt'];
	$email = $_POST['email'];
		$phone = $_POST['phone'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	 $uid = $_POST['userid'];
	
	
    $result = mysqli_query($conn, "UPDATE fx_client_db SET user_email='$email', phone_no='$phone', firstname='$fname',lastname='$lname', btc_wallet='$btc',
    eth_wallet='$eth', usdt_wallet='$usdt'  WHERE user_id='$uid'");
    
    if($result){
        $_SESSION['error'] = "Profile Updated succesfully!"; 
							            header("location:editusers.php?ed=$uid");
										exit(0);
    }
	
    


    
}
//UPDATE WALLET DETAILS

if(isset($_POST['update_wallet'])){
	
	
    $balance = $_POST['balance'];
     $bonus = $_POST['bonus'];
    $interest = $_POST['interest'];
	$username = $_POST['username'];
	$userid = $_POST['userid'];

$result = mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance', interest_balance='$interest', referral_bonus='$bonus' WHERE userid='$username'");

  
  $_SESSION['error'] = "Wallet Details Updates Successfully!"; 
							            header("location:editwallet.php?ed=$userid");
										exit(0);  
    
}
//UPDATE COURSE DETAILS

if(isset($_POST['update_admin'])){
    
    $fullname = $_POST['fullname'];
	  $uid = $_POST['userid'];
    $pass = $_POST['pass'];
    $username = $_POST['username'];
    
/*    
     open_trade='$ot', duration='$ldd', volume='$volume', profit='$profit', 
risk_management='$rfee', withdrawal_fee='$wfee', maintenance_fee='$mfee', open='$open', close='$close', high='$high', low='$low'*/
    
    
    
    $result = mysqli_query($cxn, "UPDATE argent_client_db SET fullname='$fullname', user_password='$pass', username='$username' WHERE user_id='$uid'");
    
    if($result){
        $_SESSION['error'] = "Profile updated succesfully!"; 
							            header("location:editadmin.php?ed=$uid");
                                        $stmt->close(); 
										exit(0);
    }
    
}

//UPDATE COURSE DETAILS

if(isset($_POST['update_inv'])){
    
    $date = $_POST['exp_date'];
	  $uid = $_POST['id'];
   
    
    
    
    $result = mysqli_query($cxn, "UPDATE client_investment SET return_date='$date' WHERE fund_id='$uid'");
    
    if($result){
        $_SESSION['error'] = "Investment updated succesfully!"; 
							            header("location:editinvestment.php?id=$uid");
                                        $stmt->close(); 
										exit(0);
    }
    
}


//UPDATE CENTRAL ACCOUNT
if(isset($_POST['update_account'])){
    
    $momoname = $_POST['momoname'];
	  $momono = $_POST['momono'];
    $carrier = $_POST['carrier'];
    $id = $_POST['id'];
    
    
    
    $result = mysqli_query($cxn, "UPDATE central_account SET cen_name='$momoname', cen_number='$momono', cen_carrier='$carrier' WHERE id='$id'");
    
    if($result){
        $_SESSION['error'] = "Account updated succesfully!"; 
							            header("location:editaccount.php?ed=$id");
                                        $stmt->close(); 
										exit(0);
    }
    
}




if(isset($_POST['send'])){
    
    $subject = $_POST['subject'];
	 $msg = $_POST['msg'];
	  $uid = $_POST['userid'];
	  $time = date("Y-m-d H:i:s");
	  
   
	  $email = $_POST['email'];
    
    $result = mysqli_query($cxn, "INSERT INTO chat_message(to_user_id, from_user_id, chat_message, timestamp, status) 
	VALUES('$uid', '$adminid', '$msg', '$time', '0')");
    
    if($result){
        $_SESSION['error'] = "Message sent succesfully!"; 
							            header("location:contactuser.php?u=$uid");
                                        $stmt->close(); 
										exit(0);
    }
    
}








//CREATE ADMIN ACCOUNT

if(isset($_POST['create_admin'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['pass'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$dt = date("Y-m-d H:i:s");
	
	
	$query_string = "INSERT INTO fx_client_db(firstname, lastname, user_password, user_email, username, is_admin, date_joined)
	VALUES('$fname','$lname', '$pass','$email','$username', 'yes', '$dt')";
	$result = mysqli_query($conn, $query_string);
	 $message .= "Admin Created Successfully";
									$_SESSION['error']= $message;
								   header("location:createadmin.php");
								  exit(0);
	
	
	
	
}
//CREATE USER ACCOUNT

if(isset($_POST['create_user'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$dt = date("Y-m-d H:i:s");
	
	
	   	$query_string = "INSERT INTO fx_client_db(firstname, lastname, username, user_password, user_email, is_admin, date_joined)
	   	VALUES('$fname','$lname','$username', '$pass','$email', 'no', '$dt')";
	    $result = mysqli_query($conn, $query_string);
              
	   if($result){
		   
	       mysqli_query($conn, "INSERT INTO user_wallet(userid, account_balance, interest_balance, referral_bonus) VALUES('$username', '0.00','0.00', '0.00')");           
		
        
			//Account Creation Successful

	 $message .= "User Created Successfully";
									$_SESSION['error']= $message;
								   header("location:addusers.php");
								  exit(0);
	   }
	
	
	
	
}

//CREATE ACCOUNT
if(isset($_POST['btc_account'])){
	$btc = $_POST['btc_address'];
	$target = "../act_pop/";
$target = $target . basename( $_FILES['pop']['name']); 
$pic=($_FILES['pop']['name']);
	
	$query_string = "INSERT INTO central_account(wallet_address, qrcode, method)
	VALUES('$btc','$pic', 'btc')";
	$result = mysqli_query($cxn, $query_string);
   move_uploaded_file($_FILES['pop']['tmp_name'],$target);
 
    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}

if(isset($_POST['usdt_account'])){
	$btc = $_POST['usdt_address'];
	$target = "../act_pop/";
$target = $target . basename( $_FILES['pop']['name']); 
$pic=($_FILES['pop']['name']);
	
	$query_string = "INSERT INTO central_account(wallet_address, qrcode, method)
	VALUES('$btc','$pic', 'usdt')";
	$result = mysqli_query($cxn, $query_string);
   move_uploaded_file($_FILES['pop']['tmp_name'],$target);
 
    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}


if(isset($_POST['eth_account'])){
	$eth = $_POST['eth_address'];
	$target = "../act_pop/";
$target = $target . basename( $_FILES['pop']['name']); 
$pic=($_FILES['pop']['name']);
	
	$query_string = "INSERT INTO central_account(wallet_address, qrcode, method)
	VALUES('$eth','$pic', 'eth')";
	$result = mysqli_query($cxn, $query_string);
move_uploaded_file($_FILES['pop']['tmp_name'],$target);

    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}


if(isset($_POST['paypal_account'])){
	$pusername = $_POST['pusername'];
	$pname = $_POST['pname'];
	$pemail = $_POST['pemail'];
	$others = $_POST['others'];
	
	$query_string = "INSERT INTO central_account(paypal_username, paypal_email, paypal_name, paypal_phone, method)
	VALUES('$pusername','$pemail','$pname', '$others', 'paypal')";
	$result = mysqli_query($cxn, $query_string);

    
                          $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);

	
	
	
	
	
}
//CREATE ACCOUNT
if(isset($_POST['create_account'])){
	$btc = $_POST['btc_address'];
	$eth = $_POST['eth_address'];
	$usdt = $_POST['usdt_address'];
	
	if(!empty($btc)){

		$query_string = "INSERT INTO central_account(wallet_address, method) VALUES('$btc', 'btc')";
		 $result = mysqli_query($conn, $query_string);
		

	}
	if(!empty($eth)){

		$query_string = "INSERT INTO central_account(wallet_address, method) VALUES('$eth', 'eth')";
		 $result = mysqli_query($conn, $query_string);

	}
	if(!empty($usdt)){

		$query_string = "INSERT INTO central_account(wallet_address, method) VALUES('$usdt', 'usdt')";
		 $result = mysqli_query($conn, $query_string);


	}
	
	 $message .= "Account Added Successfully";
									$_SESSION['error']= $message;
								   header("location:createaccount.php");
								  exit(0);
	
	
	
	
}


//SEND REPLY TO USER

if(isset($_POST['send_reply'])){
	$sender = "Admin";
	$receiver = $_POST['receiver'];
	$title = $_POST['title'];
	$msg = $_POST['reply'];
	$dt = date("Y-m-d H:i:s");

	$query = "INSERT INTO support(sender, receiver, title, message, status) VALUES('$sender', '$receiver','$title', '$msg', '0')";
	$result = mysqli_query($cxn, $query);
	if($result){
	 $message .= "Reply Sent Successfully";
									$_SESSION['error']= $message;
								   header("location:support.php");
								  exit(0); 
	}else{
	    echo "Error! Data failed to submit to database";
	}
	
	
	
	
}


//SEND MESSAGES TO ALL TO USERS

if(isset($_POST['sendtousers'])){
	
	$msg = $_POST['msg'];
	$dt = date("Y-m-d H:i:s");
	
	
	    
	  $query_string = "INSERT INTO notifications(receiver, sender, message, message_time, status)
	VALUES('all', 'Admin', '$msg', '$dt', '0')";
	$result = mysqli_query($cxn, $query_string);
	    
	
	

	 $message .= "Broadcast Message Sent Successfully";
									$_SESSION['error']= $message;
								   header("location:broadcast.php");
								  exit(0);
	
	
	
	
}

if(isset($_POST['confirmpayment'])){
	
	$trans = $_POST['trans'];
	$payer = $_POST['payer'];
	$amount = $_POST['amount'];
	$dt = date("Y-m-d");
	$bonus = 0.025 * $amount;

	$query = "SELECT user_id, reference FROM fx_client_db WHERE username='$payer'";
     $result = mysqli_query($conn, $query);
     $row=mysqli_fetch_assoc($result);
     extract($row);

	 		 //check if user has PH before
		   
				  $sql_ship = "UPDATE client_deposit SET fund_date='$dt', payment_confirmed='yes', status='completed' WHERE transid='$trans'";
                           $result = mysqli_query($conn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($conn));
               
			//updat user wallet 
			 $sql_ship = "UPDATE user_wallet SET account_balance=account_balance + '$amount' WHERE userid='$user_id'";
                           $result = mysqli_query($conn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($conn));
			//referral bonus
			$sql_ship2 = "UPDATE user_wallet SET referral_bonus=referral_bonus + '$bonus' WHERE userid='$reference'";
                           $result = mysqli_query($conn,$sql_ship2)
                                   or die("$sql_ship2" . mysqli_error($conn));
	

	 $message .= "User payment has been confirmed";
									$_SESSION['error']= $message;
								   header("location:investment.php");
								   exit(0);
	
	
	
	
}

if(isset($_POST['confirmpayment2'])){
	
	$trans = $_POST['trans'];
	$payer = $_POST['payer'];
	$amount = $_POST['amount'];
	$dt = date("Y-m-d H:i:s");
	$exp_date = date('Y-m-d H:i:s', strtotime($dt . '+7 days'));
		        $expected_amount = ($amount * 0.5) + $amount;
		       
	
	 		
				  $sql_ship = "UPDATE client_investment2 SET fund_date='$dt', 
            		                            expected_returns='$expected_amount', expected_date='$exp_date', payment_confirmed='yes', completed='yes' WHERE transid='$trans'";
                           $result = mysqli_query($cxn,$sql_ship)
                                   or die("$sql_ship" . mysqli_error($cxn));
				 mysqli_query($cxn, "INSERT INTO client_investment(payer, fund_amount, fund_date, expected_returns, expected_date, payment_confirmed, completed) 
				 VALUES('$payer','$amount', '$dt', '$expected_amount', '$exp_date', 'yes', 'no')");
			

	 $message .= "User payment has been confirmed";
									$_SESSION['error']= $message;
								   header("location:investment2.php");
								  exit(0);
	
	
	
	
}





?>