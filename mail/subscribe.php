<?php
// Check for empty fields
if(empty($_POST['email']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email_address = $_POST['email'];
	
// Create the email and send the message
$to = 'info@okuli.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Hey foodbox, You've got a new subscriber!! Woooo!!";
$email_body = "Knock knock!! Your new subscriber. You deserve every bit of it!\n\n"."Here are the details:\n\nEmail: $email_address";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>