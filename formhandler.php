<?php
$name = $_POSR['name'];
$visitor_email = $_POST['email'];
$gharana = $_POST['gharana'];
$message = $POST['message'];

$email_from = 'shrishtiaccademy16@gmail.com';
$email_subject = 'New Registration';
$email_body = "user Name: $name.\n".
              "visitor Email: $visitor_email.\n".
              "gharana: $gharana.\n".
              "message: $message.\n";

$to = "samhithaholla16@gmail.com";
$headers = "From: $email_from \r\n";
$headers . = "reply-to: $visitor_email \r\n";
mail($to,$email_body,$email_subject,$headers);
header("Location: contact.html");

?>
