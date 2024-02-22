<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_from ='ndex.html@gmail.com'
$email_subject ='new form submission'
$email_body ="user name: $name.\n".
"user email: $email.\n".
"user subject: $subject.\n".
"user message: $message.\n";

$to='abbasiarslan127@gmail.com';
$headers ="from: $email_from \r\n"
$headers .="Reply-to: $visitor_email \r\n";
mail($t0,$email_subject,$email_body,$headers);
header("location:contact.html");
?>