<?php
session_start();
include_once('db_connect.php');
include_once('functions/function.php');
// Initialize an error message array


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $fname = htmlspecialchars(trim($_POST['fname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $country = htmlspecialchars(trim($_POST['country']));
    $phoneNumber = htmlspecialchars(trim($_POST['phoneNumber']));
    $email = htmlspecialchars(trim($_POST['email']));
    $userName = htmlspecialchars(trim($_POST['userName']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirmPassword = htmlspecialchars(trim($_POST['confirmPassword']));
    $datejoined = date('Y-m-d H:i:s');
    $admin = 'no';
    $verified = 'no';
    $ref = $_POST['ref'];

    // Validate inputs
    
    if (empty($phoneNumber) || !preg_match('/^[0-9]{10,15}$/', $phoneNumber)) {

        $_SESSION['error'] = "Valid phone number is required.";
        header('location:register.php');
        exit;
        
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $_SESSION['error'] = "Valid email address is required.";
        header('location:register.php');
        exit;
    }
    if (empty($userName)) $errors[] = "Username is required.";
    if (empty($password)) $errors[] = "Password is required.";
    if ($password !== $confirmPassword) $errors[] = "Passwords do not match.";

    // Check if username or email already exists
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT user_id FROM fx_client_db WHERE username = ? OR user_email = ?");
        $stmt->bind_param("ss", $userName, $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {

            $_SESSION['error'] = "Username or email already exists.";
            header('location:register.php');
            exit;
        
        }
        $stmt->close();
    }

    // If no errors, insert into database
    if (empty($errors)) {
        
        $stmt = $conn->prepare("INSERT INTO fx_client_db (firstname, lastname, country, phone_no, user_email, username, user_password, is_admin, is_verified, date_joined, reference) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $fname, $lname, $country, $phoneNumber, $email, $userName, $password, $admin, $verified, $datejoined, $ref);

        if ($stmt->execute()) {
            // Send welcome email
            $userid = mysqli_insert_id($conn);

            $sql_ship = "INSERT INTO user_wallet(userid, account_balance, referral_bonus, interest_balance)
                                          VALUES('$userid','0.00', '0.00', '0.00')";
                 $result = mysqli_query($conn,$sql_ship)
                         or die("$sql_ship" . mysqli_error($conn));

                    
            $subject = "Welcome to Quantum Bridge";
            $message = "
<html>
<head>
    <title>$subject</title>
</head>
<body style='background:#f1f1f1;padding:10px'>
    <h1 style='color:indigo'>Welcome $fname!</h1>
    <p>Thank you for signing up with us at Quantum Bidge FX. We're excited to have you on board!</p>
    <p><strong>Kindly make a deposit to start investing and earning!</strong></p>
    <p>-The Quantum Bridge Team</p>
</body>
</html>
";
          

                sendHtmlEmail($to, $subject, $message);

                $_SESSION['error'] = "Account created! A welcome email has been sent to you. Kindly check your INBOX or JUNK folders for the email";
                header('location:login.php');
                exit;
            
        } else {

            $_SESSION['error'] = "Error: " . $stmt->error;
            header('location:register.php');
            exit;
            
        
        }
        $stmt->close();
    }

    // Close the database connection
    $conn->close();

}
?>
