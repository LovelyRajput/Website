<?php
$name = $_PoST['name'];
$visitor_email = $_PoST['email'];
$subject = $_PoST['subject'];
$message = $_PoST['message'];

$email_from = 'info@LMA.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n"
               "Subject: $subject.\n"
               "User Message: $message.\n";

$to = 'lodhiawards@gmail.com'

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");
?>