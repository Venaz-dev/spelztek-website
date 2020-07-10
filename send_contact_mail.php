<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$phone = $_POST["userPhone"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "pokymon90@gmail.com";
	$mailHeaders = "From: " . $name . "<" . $phone . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.html";
?>