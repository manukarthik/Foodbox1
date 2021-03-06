<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['address'])   ||
   empty($_POST['message'])   ||
   empty($_POST['rating'])    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$ratingStars = ($_POST['rating']);
   
// Create the email and send the message
$to = 'manukarthikkr@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Hey foodbox, You have a new subscriber!!:  $name";
$email_body = "Knock knock!! Your new subscriber. You deserve every bit of it!\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message\n\ratingStars:\n$ratingStars";
$headers = "From: foodbox@foodboxmysuru.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>