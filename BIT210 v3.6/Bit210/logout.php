<?php
	session_start();
	echo '<script language = "javascript">';
				echo 'alert("Thank you visiting HelpFit!!")';
				echo '</script>';
				echo  "<script> window.location.assign('homepage.php'); </script>";
	session_destroy();
?>