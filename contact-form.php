<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

$email_from= 'ahsanwaseem77@gmail.com';

$email_subject="New form submission";

$email_body="User Name: $name.\n". 
                "User Email: $email.\n". 
                  "User Subject: $subject.\n".
                    "User Message: $message .\n";

    
$to = "wahsan77@yahoo.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");




?>