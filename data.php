<?php 

    $name = $_POST['name'];
    $number = $_POST['number'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_form = 'ex-alim.great-site.net';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                  "User Number: $number.\n".
                  "User Email: $visitor_email.\n".
                  "User Subject: $subject.\n".
                  "User Message: $message.\n";

    $to = 'ahamadalim65@gmail.com';

    $headers = "From: $email_form \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>