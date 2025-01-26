<?php
include_once('auth.php');
include_once('../functions/function.php');


if(isset($_POST['basic_plan'])){ 
    $amount = $_POST['amount'];
    $plan = $_POST['plan'];
    $interest = 0.06 * $amount;
    $exp_returns = $interest + $amount;
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to invest. Kindly make a deposit!";
        header("location:plans.php");
        exit;
    } 

    if($amount < 60){
        $_SESSION['error'] = "Invalid amount for basic investment plan($60 - $499)";
        header("location:plans.php");
        exit;
    }         
                  $balance = $account_balance - $amount;
                  $time = date('Y-m-d H:i:s');
                  $sql_ship = "INSERT INTO client_investment(investor, invested_amount, investment_date, daily_profit, expected_return, plan, status)
                                          VALUES('$username','$amount', '$time', '$interest', '$exp_returns', '$plan', 'active')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 //update main wallet
                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");

                $subject = "Transaction Notification";
                $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body style='background:#f1f1f1;padding:10px'>
        <h1 style='color:indigo'>Hello $fname!</h1>
        <p>Your investment of USD$amount in our $plan investment plan was successful. </p>
        <p><strong>Thank you for choosing us!</strong></p>
        <p>-The Quantum Bridge Team</p>
    </body>
    </html>
    ";
              
    
                    sendHtmlEmail($to, $subject, $message);

                 $_SESSION['success'] = "Your Investment in our basic plan was successful";
                header("location:plans.php");
}

if(isset($_POST['silver_plan'])){ 
    $amount = $_POST['amount'];
    $plan = $_POST['plan'];
    $interest = 0.12 * $amount;
    $exp_returns = $interest + $amount;
    $balance = $account_balance - $amount;
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to invest. Kinddly make a deposit!";
        header("location:plans.php");
        exit;
    } 

    if($amount < 500){
        $_SESSION['error'] = "Invalid amount for silver investment plan(Min: $500)";
        header("location:plans.php");
        exit;
    }             $desc = "Invested USD". $amount;
                  $time = date('Y-m-d H:i:s');
                  $sql_ship = "INSERT INTO client_investment(investor, invested_amount, investment_date, daily_profit, expected_return, plan, status)
                                          VALUES('$username','$amount', '$time', '$interest', '$exp_returns', '$plan', 'active')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                                          VALUES('$username','$desc', 'invest', '$time')";
                 $result = mysqli_query($conn,$trans_query)
                         or die("$trans_query" . mysqli_error($conn));

                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");

                $subject = "Transaction Notification";
                $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body style='background:#f1f1f1;padding:10px'>
        <h1 style='color:indigo'>Hello $fname!</h1>
        <p>Your investment of USD$amount in our $plan investment plan was successful. </p>
        <p><strong>Thank you for choosing us!</strong></p>
        <p>-The Quantum Bridge Team</p>
    </body>
    </html>
    ";
              
    
                    sendHtmlEmail($to, $subject, $message);

                 $_SESSION['success'] = "Your Investment in our silver plan was successful";
                header("location:plans.php");
}

if(isset($_POST['premium_plan'])){ 
    $amount = $_POST['amount'];
    $plan = $_POST['plan'];
    $interest = 0.18 * $amount;
    $exp_returns = $interest + $amount;
    $balance = $account_balance - $amount;
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to invest. Kinddly make a deposit!";
        header("location:plans.php");
        exit;
    } 

    if($amount < 3000){
        $_SESSION['error'] = "Invalid amount for our premium investment plan(Min: $3000)";
        header("location:plans.php");
        exit;
    } 
                    $desc = "Invested USD". $amount;
                  $time = date('Y-m-d H:i:s');
                  $sql_ship = "INSERT INTO client_investment(investor, invested_amount, investment_date, daily_profit, expected_return, plan, status)
                                          VALUES('$username','$amount', '$time', '$interest', '$exp_returns', '$plan', 'active')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 
                         // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                 VALUES('$username','$desc', 'invest', '$time')";
                $result = mysqli_query($conn,$trans_query)
                or die("$trans_query" . mysqli_error($conn));

                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");

                $subject = "Transaction Notification";
                $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body style='background:#f1f1f1;padding:10px'>
        <h1 style='color:indigo'>Hello $fname!</h1>
        <p>Your investment of USD$amount in our $plan investment plan was successful. </p>
        <p><strong>Thank you for choosing us!</strong></p>
        <p>-The Quantum Bridge Team</p>
    </body>
    </html>
    ";
              
    
                    sendHtmlEmail($to, $subject, $message);

                 $_SESSION['success'] = "Your Investment in our premium plan was successful";
                header("location:plans.php");
}

if(isset($_POST['diamond_plan'])){ 
    $amount = $_POST['amount'];
    $plan = $_POST['plan'];
    $interest = 0.24 * $amount;
    $exp_returns = $interest + $amount;
    $balance = $account_balance - $amount;
     
    if($amount > $account_balance){
        $_SESSION['error'] = "You don't have enough funds in your account to invest. Kinddly make a deposit!";
        header("location:plans.php");
        exit;
    } 

    if($amount < 7000){
        $_SESSION['error'] = "Invalid amount for diamond investment plan(Min: $500)";
        header("location:plans.php");
        exit;
    } 
                  $desc = "Invested USD". $amount;
                  $time = date('Y-m-d H:i:s');
                  $sql_ship = "INSERT INTO client_investment(investor, invested_amount, investment_date, daily_profit, expected_return, plan, status)
                                          VALUES('$username','$amount', '$time', '$interest', '$exp_returns', '$plan', 'active')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 // insert into transction table

                 $trans_query = "INSERT INTO notifications(username, description, transaction_type, transaction_date)
                                          VALUES('$username','$desc', 'invest', '$time')";
                 $result = mysqli_query($conn,$trans_query)
                         or die("$trans_query" . mysqli_error($conn));

                mysqli_query($conn, "UPDATE user_wallet SET account_balance='$balance' WHERE userid='$user_id'");

                $subject = "Transaction Notification";
                $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body style='background:#f1f1f1;padding:10px'>
        <h1 style='color:indigo'>Hello $fname!</h1>
        <p>Your investment of USD$amount in our $plan investment plan was successful. </p>
        <p><strong>Thank you for choosing us!</strong></p>
        <p>-The Quantum Bridge Team</p>
    </body>
    </html>
    ";
              
    
                    sendHtmlEmail($to, $subject, $message);


                 $_SESSION['success'] = "Your Investment in our diamond plan was successful";
                header("location:plans.php");
}
  

  

  
  
  