<?php
	//email function
	function emailTo( $email,$hisFullName,$hisPasswor){
		
		$to      = $email;
		$subject = "HELPFit passwor recovery";
		$message = "Hello: \r\n\r\nDear\r\n\r\n" . $hisFullName . "\r\n\r\nThank you for using HELPFit SYSTEM .\r\n\r\n The Following are your login credentials:\r\n\r\n Email: " .$email. "\r\n\r\nPassword: " .$hisPasswor."\r\n\r\n Please login as soon as possible to change your password upon reciving this email.\r\n\r\n Note: This is computer generated email. DO NOT REPLY TO THIS EMAIL.";
		$headers = 'From: help@helpfit.com'. "\r\n" .$email;
		
		$mail = mail($to,  $subject, $message,  $headers);
		if($mail){
			echo "<script type='text/javascript'>alert('Please check your email for login information.');
			setTimeout(\"location.href = 'login_page.php';\",0);</script>";
		}else{
			echo mail(error_reporting());
			echo "<script>setTimeout(\"location.href = 'forgotpassword.php';\",0);</script>";
		}
	}
?>