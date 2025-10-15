<?php

if (isset($_POST['submit'])) {

	// Replace this with your own email address
	$siteOwnersEmail = 'admisi@kemurnian.sch.id';

	$fname = trim(stripslashes($_POST['contactName']));
	$phone = trim(stripslashes($_POST['contactPhone']));
	$email = trim(stripslashes($_POST['contactEmail']));
	$subject = trim(stripslashes($_POST['contactSubject']));
	$contact_message = trim(stripslashes($_POST['contactMessage']));

	// Check First Name
	if (strlen($fname) < 2) {
		$error['fname'] = "Please enter your first name.";
	}
	// Check Last Name
	if (strlen($phone) < 11) {
		$error['phone'] = "Please enter your phone number. It should have at least 11 characters.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Please enter your message. It should have at least 15 characters.";
	}
	// Subject
	if ($subject == '') {
		$subject = "Contact Form Submission";
	}

	// Set Name
	$name = $fname;

	// Set Message
	$message .= "Email from : " . $name . "<br />";
	$message .= "Phone Number : " . $phone . "<br />";
	$message .= "Email address : " . $email . "<br />";
	$message .= "Message : <br />";
	$message .= $contact_message;
	$message .= "<br /> ----- <br /> This email was sent from Sekolah Kemurnian contact form. <br />";

	// Set From: header
	$from =  $name . " <" . $email . ">";

	// Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: " . $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	if (!$error) {

		ini_set("sendmail_from", $siteOwnersEmail); // for windows server
		$mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) {
			echo '<script type="text/javascript">alert("Message was sent successfully, We will contact you shortly")</script>';
		} else {
			echo '<script type="text/javascript">alert("Submission failed, Please try again")</script>';
		}
	} # end if - no validation error

	else {

		$response = (isset($error['fname'])) ? $error['fname'] . "<br /> \n" : null;
		$response .= (isset($error['phone'])) ? $error['phone'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
	} # end if - there was a validation error

}
