<?php
	include("emailPass.php");
	session_start();

	$email = $_POST['email'];

	$conn = mysqli_connect('localhost','root','','helpfit');
	if ($conn ->connect_error) {
		die('Connection failed: '.$conn ->connect_error);
	}

	if (isset($_POST['resetPass'])) {

		if (!empty($email)) {

			$checkEmail = mysqli_query($conn,"SELECT email FROM users where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){

				$sql1 = "SELECT fullName,password FROM users where email = '$email'";
				$result = $conn->query($sql1);
				while ($rst = $result->fetch_array()) {
					$hisFullName = $rst['fullName'];
					$hisPasswor = $rst['password'];
				}

				echo '<script language = "javascript">';
				echo 'alert("The reset email is sent to your email, please check on your email!!")';
				echo '</script>';
				echo  "<script> window.location.assign('login_page.php'); </script>";
				emailTo($email,$hisFullName,$hisPasswor);
			}else{
				echo '<script language = "javascript">';
				echo 'alert("This email doesn\'t exist in the Database!!")';
				echo '</script>';
				echo  "<script> window.location.assign('forgotpassword.php'); </script>";
			}
		}
	}

?>
