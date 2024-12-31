
<?php

@ob_start();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = "info@torbitmultisoft.com"; // Change this to your email address
    $subject = "New Inquiry Received";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\Message: $message\n";

    // Send email
    // if (mail($to, $subject, $body)) {
        if(true){
        // Set the success message
        $message = 'Thank you! Your message has been sent.';
        // Redirect to contact.php with message as URL parameter
        header('Location: contact.php?message=' . urlencode($message));
        exit();
    } else {
        // Set the error message
        $message = "Oops! Something went wrong.";
        // Redirect to contact.php with message as URL parameter
        header('Location: contact.php?message=' . urlencode($message));
        exit();
    }
}

// If the method is not POST, redirect to contact.php
header('Location: contact.php');
exit();
?>
