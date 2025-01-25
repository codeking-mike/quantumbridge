<?php
include_once('auth.php');

if(isset($_POST['btc'])){ 
    $amount = $_POST['amount'];
    $user = $_POST['user'];
    $method = $_POST['method'];
    $orderid = random_int(1, 10000);
     
                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_deposit(payer, fund_amount, fund_date, payment_confirmed, method, status, orderid)
                                          VALUES('$user','$amount', '$time', 'no', '$method', 'pending', '$orderid')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 $transid = mysqli_insert_id($conn);
  
                header("location:deposithistory.php");
}
  

if(isset($_POST['eth'])){ 
    $amount = $_POST['amount'];
    $user = $_POST['user'];
    $method = $_POST['method'];
    $orderid = random_int(1, 10000);
     
                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_deposit(payer, fund_amount, fund_date, payment_confirmed, method, status, orderid)
                                          VALUES('$user','$amount', '$time', 'no', '$method', 'pending', '$orderid')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 $transid = mysqli_insert_id($conn);
  
                header("location:deposithistory.php");
}

if(isset($_POST['usdt'])){ 
    $amount = $_POST['amount'];
    $user = $_POST['user'];
    $method = $_POST['method'];
    $orderid = random_int(1, 10000);
     
                  $time = date('Y-m-d');
                  $sql_ship = "INSERT INTO client_deposit(payer, fund_amount, fund_date, payment_confirmed, method, status, orderid)
                                          VALUES('$user','$amount', '$time', 'no', '$method', 'pending', '$orderid')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));
                 $transid = mysqli_insert_id($conn);
  
                header("location:deposithistory.php");
}
  
  
  