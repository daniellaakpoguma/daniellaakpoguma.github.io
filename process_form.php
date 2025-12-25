<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your_email@example.com";
    $subject = "New Message from Portfolio Website";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
