<?php 
// This script sends contact information for all contact forms
$to = '';
$first_name = $_POST['firstname'];
$email = $_POST['email'];

$first_name = trim($first_name);
$email = trim($email);

$subject = $first_name.' wants more information';

if (!isset($first_name) && !isset($email)){ 

	header('location: ');
}else{
	$headers = "From: $email";
	
	$message = "Hello, "."\n";
	$message .= "$first_name has attempted to contact you via email.";
	$message .= "Please contact them at your earliest convenience via email ";
	$message .= "at ". $email;

	mail($to, $subject, $message, $headers);
}




 ?>