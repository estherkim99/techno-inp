<?php

if(!isset($_POST['submit'])) {
    echo "error; This page cannot be accessed directly.";
} 
$senderName=$_POST['name'];
$senderEmail=$_POST['email'];
$message=$_POST['message'];

// validate
if (empty($senderName) || empty($senderEmail)) {
    echo "Name and email address are mandatory fields.";
    exit;
}
$recipient="info@technoinp.com";
$subject="[Contact Message - Techno Web]";
$mailBody="You have receive a new message from Techno I&P website.\nName: $senderName\nEmail: $senderEmail\n\n$message";

$headers = "From: $recipient\n";
mail($recipient, $subject, $mailBody, $headers);

// redirect to thank-you page.
$thankYou="<p>Thank you! Your message has been sent.</p>";
header('Location: ../index.html');

?>