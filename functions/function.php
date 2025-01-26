<?php
function sendHtmlEmail($to, $subject, $message) {
    // Define the headers for an HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers (optional, can be customized)
    $headers .= "From: Quantum Bridge FX <noreply@quantumbridgeus.com>" . "\r\n";
    $headers .= "Reply-To: noreply@quantumbridgeus.com" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Use the mail() function to send the email
    mail($to, $subject, $message, $headers);
        
}

?>