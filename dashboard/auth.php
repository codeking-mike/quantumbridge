<?php
session_start();
include_once('../db_connect.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}else{

  $userid = $_SESSION['user_id'];
    
    $user_data = "SELECT * FROM fx_client_db WHERE user_id='$userid'";
								$res = mysqli_query($conn, $user_data);
								$row = mysqli_fetch_assoc($res);
								extract($row);

    $user_wallet = "SELECT account_balance, referral_bonus, interest_balance FROM user_wallet WHERE userid='$userid'";
    $result = mysqli_query($conn, $user_wallet);
    $fetch_row = mysqli_fetch_assoc($result);
    extract($fetch_row);

   //fetch the total deposit amount
   
$dep_query = "SELECT SUM(fund_amount) AS total_deposit FROM client_deposit WHERE payer='$username' AND payment_confirmed='yes'";
$result = $conn->query($dep_query);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_deps =  $row['total_deposit'];
} else {
    $total_deps ='0.00';
}

//fetch the total investment amount
   
$inv_query = "SELECT SUM(invested_amount) AS total_investment FROM client_investment WHERE investor='$username' AND status='active'";
$result = $conn->query($inv_query);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_invs =  $row['total_investment'];
} else {
    $total_invs ='0.00';
}

  
//fetch the total withdrawal amount
   
$with_query = "SELECT SUM(with_amount) AS withdraw FROM client_withdrawals WHERE receiver='$username' AND completed='yes'";
$result = $conn->query($with_query);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_with =  $row['withdraw'];
} else {
    $total_with ='0.00';
}

//increase daily profit
$user_inv = "SELECT investment_date, daily_profit FROM client_investment WHERE investor='$username' AND status='active'";
    $result = mysqli_query($conn, $user_inv);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result) ){
            extract($row);
            $pastDate = $investment_date;

                // Create a DateTime object for the past date
                $datetime1 = new DateTime($pastDate);

                // Get the current date and time
                $datetime2 = new DateTime(); // This automatically gets the current date and time

                // Calculate the difference
                $interval = $datetime1->diff($datetime2);

                // Get the difference in days
                $days = $interval->days;
                $interest = $days * $daily_profit;

                mysqli_query($conn, "UPDATE user_wallet SET interest_balance='$interest' WHERE userid='$user_id'");

        }
    }
    

}

?>