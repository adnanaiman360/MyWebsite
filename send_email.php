<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email message
    $to = "adnanaiman2904@gmail.com";
    $subject = "New Message from Portfolio Contact Form";
    $body = "First Name: $fname\n";
    $body .= "Last Name: $lname\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We'll be in touch shortly!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied!";
}
?>
