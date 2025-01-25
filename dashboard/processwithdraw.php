<?php
include_once('auth.php');

if(isset($_GET['bonus'])){

    if($referral_bonus > 0){
        //update main wallet
        mysqli_query($conn, "UPDATE user_wallet SET account_balance=account_balance + $referral_bonus WHERE userid='$user_id'");
        $_SESSION['success'] = "Referral Commission deposited to your account!";
        header("location:referral.php");
        exit;
      
    }else{
        $_SESSION['error'] = "You don't have enough funds in your account to withdraw!";
        header("location:referral.php");
        exit;
      }
       



}

if(isset($_GET['interest'])){

    $date = date('Y-m-d H:i:s');

    if($interest_balance > 0){
        //update main wallet
        mysqli_query($conn, "UPDATE user_wallet SET account_balance=account_balance + $interest_balance, interest_balance='0.00' WHERE userid='$user_id'");

        mysqli_query($conn, "UPDATE client_investment SET investment_date='$date' WHERE investor='$username' AND status='active'");
        $_SESSION['success'] = "Interest deposited to your account!";

        header("location:index.php");
        exit;
      
    }else{
        $_SESSION['error'] = "You don't have enough funds in your account to withdraw!";
        header("location:index.php");
        exit;
      }
       



}
if(isset($_POST['btc_withdraw'])){ 
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to withdraw!";
        header("location:withdraw.php");
        exit;
    }else{

                 $balance = $account_balance - $amount;
                 $desc = 'Withdrawal of USD'.$amount;

                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_withdrawals(receiver, with_amount, date_withdrawn, method, completed)
                                          VALUES('$username','$amount', '$time', '$method', 'no')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));

                 // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                                          VALUES('$username','$desc', 'withdraw', '$time')";
                 $result = mysqli_query($conn,$trans_query)
                         or die("$trans_query" . mysqli_error($conn));

                //update main wallet
                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");


            
                 $_SESSION['success'] = "Withdrawal Requests Initiated. You will receive payment in your wallet shortly!";
                header("location:withdraw.php");

    }

    
                  
}

if(isset($_POST['eth_withdraw'])){ 
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to withdraw!";
        header("location:withdraw.php");
        exit;
    }else{

                 $balance = $account_balance - $amount;
                 $desc = 'Withdrawal of USD'.$amount;

                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_withdrawals(receiver, with_amount, date_withdrawn, method, completed)
                                          VALUES('$username','$amount', '$time', '$method', 'no')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));

                 // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                                          VALUES('$username','$desc', 'withdraw', '$time')";
                 $result = mysqli_query($conn,$trans_query)
                         or die("$trans_query" . mysqli_error($conn));

                //update main wallet
                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");


            
                 $_SESSION['success'] = "Withdrawal Requests Initiated. You will receive payment in your wallet shortly!";
                header("location:withdraw.php");

    }

    
                  
}

if(isset($_POST['usdt_withdraw'])){ 
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to withdraw!";
        header("location:withdraw.php");
        exit;
    }else{

                 $balance = $account_balance - $amount;
                 $desc = 'Withdrawal of USD'.$amount;

                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_withdrawals(receiver, with_amount, date_withdrawn, method, completed)
                                          VALUES('$username','$amount', '$time', '$method', 'no')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));

                 // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                                          VALUES('$username','$desc', 'withdraw', '$time')";
                 $result = mysqli_query($conn,$trans_query)
                         or die("$trans_query" . mysqli_error($conn));

                //update main wallet
                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");


            
                 $_SESSION['success'] = "Withdrawal Requests Initiated. You will receive payment in your wallet shortly!";
                header("location:withdraw.php");

    }

    
                  
}


  