<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$to = "mike@roachdesign.com";
$subject = "Portfolio Contact Form";

mail($to, $subject, $message, "From: " . $name);
echo "Your message has been sent";

?>