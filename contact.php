<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent!";
    } else {
        echo "Message could not be sent.";
    }
}
?>
