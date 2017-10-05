<?php 
// This script sends contact information for all contact forms

$to = ''; //SET TO: EMAIL / WHERE SHOLD THE INFO GO
$first_name = $_POST['firstname'];
$email = $_POST['email'];
$contactMsg = $_POST['contactMsg'];


//Strip Special Characters
$first_name = strip_tags($first_name);
$email= strip_tags($email);
$contactMsg = strip_tags($contactMsg);

//Trim Spaces
$first_name = trim($first_name);
$email = trim($email);
$contactMsg = trim($contactMsg);

$subject = $first_name.' wants more information';


//Set a default answer if no on contact page
//or if no message was entered
if(!isset($contactMsg)){
	$contactMsg = "No message provided.";
}

if (!isset($first_name) && !isset($email)){ 

	header('location: '); //PLACE REDIRECT LOCATION HERE UPON COMPLETION FAILURE.

}else{
	$headers = "From: $email";
	
	$message = "Hello, "."\n";
	$message .= "$first_name has attempted to contact you via email.";
	$message .= "Please contact them at your earliest convenience via email ";
	$message .= "at ". $email ."\n\n";
	$message .= $contactMsg;

	mail($to, $subject, $message, $headers);

	header('location: '); //PLACE REDIRECT LOCATION HERE.
}






 ?>