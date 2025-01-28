<?php
// Start the session
session_start();

include_once('db_connect.php');
// Initialize an error message
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $userName = htmlspecialchars(trim($_POST['userName']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Validate inputs
    if (empty($userName)) {
        $error = "Username is required.";
    } elseif (empty($password)) {
        $error = "Password is required.";
    } else {
        // Check user credentials in the database
        $stmt = $conn->prepare("SELECT user_id, user_password, is_admin FROM fx_client_db WHERE username = ? OR user_email = ?");
        $stmt->bind_param("ss", $userName, $userName);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userId, $upassword, $is_admin);
            $stmt->fetch();

            // Verify the password
            if ($password == $upassword) {
                // Set session variables
                if($is_admin === 'yes'){
                 $_SESSION['admin'] = $userId;
                 header("location: ./backend");
                 exit;
                }else{
                     
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['username'] = $userName;
                    // Redirect to dashboard or home page
                    header("location: ./dashboard");
                    exit;

                }
                
            } else {
                $error = "Invalid username or password.";
                $_SESSION['error'] = $error;
                header("location: login.php");
            }
        } else {
            $error = "Invalid username or password.";
            $_SESSION['error'] = $error;
            header("location: login.php");
        }
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>