<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "yp057130@gmail.com"; // Your Email
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Email Sent Successfully!";
    } else {
        echo "Error Sending Email.";
    }
}
?>