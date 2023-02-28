<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Subject";
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "adkwebsite100@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'



?>
