<?php
$name = _POST['name'];
$visitor_email = _POST['email'];
$subject = _POST['subject'];
$message = _POST['message'];




$email_from = 'info@eyeconstrction';
$email_subject ='Feedback/Appling';
$email_body = "UserName:$name.\n".
              "UserEmail:$visitor_email\n".
              "Subject:$subject\n".
              "UserMessage:$message\n";
$to = 'interiorscreativeeye@gmail.com';
$headers = "Form: $email_form \r\n";
$headers .="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");   
?>  
