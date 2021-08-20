<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ekechinedu488@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you for contacting me, $name. You will get a reply within 24 hours.";

?>