<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the email
    $to = 'ahamadalim65@gmail.com'; 
    $subject = 'New Contact Form Submission';
    $messageBody = "Name: $name\nNumber: $number\nEmail: $email\nSubject: $subject\nMessage: $message";
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        echo 'Thank you for your message. We will get back to you shortly.';
    } else {
        // Error sending email
        echo 'There was an error while sending your message. Please try again later.';
        // Print the error message
        echo error_get_last()['message'];
    }
}
?>
