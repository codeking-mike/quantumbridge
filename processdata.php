<?php
session_start();
include_once('db_connect.php');
// Initialize an error message array
$errors = [];

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
    if (empty($fname)) $errors[] = "First name is required.";
    if (empty($lname)) $errors[] = "Last name is required.";
    if (empty($country)) $errors[] = "Country is required.";
    if (empty($phoneNumber) || !preg_match('/^[0-9]{10,15}$/', $phoneNumber)) {
        $errors[] = "Valid phone number is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email address is required.";
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
            $errors[] = "Username or email already exists.";
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

                    
            $subject = "Welcome to Our Platform!";
            $message = "Hello $fname,\n\nThank you for signing up with us at Quantum Bidge FX\n\n. We're glad to have you with us!";
            $headers = "From: no-reply@quantumbridgeus.com"; // Replace with your email

            if (mail($email, $subject, $message, $headers)) {
                echo "Account created! A verification email has been sent to you. Kindly check your INBOX or JUNK folders for the email";
                header('location:login.php');
            } else {
                echo "Account created ";
                header('location:login.php');
            }
        } else {
            $errors[] = "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    // Close the database connection
    $conn->close();

    // Handle errors
    if (!empty($errors)) {
        $_SESSION['error'] = $errors;
        header('location:register.php');
        
    }
}
?>
