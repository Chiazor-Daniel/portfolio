<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address (your Gmail account)
    $to = "chiazordaniel317@gmail.com";

    // Set the subject and email headers
    $subject = "New contact form submission from $name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}
?>
