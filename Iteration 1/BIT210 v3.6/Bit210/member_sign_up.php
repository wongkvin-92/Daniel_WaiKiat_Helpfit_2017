<?php

	$fullName = $_POST['fullname'];
	$userName = $_POST['username'];
	$password = $_POST['password'];
	$cPassword = $_POST['confirmpass'];
	$email = $_POST['emailadd'];

	$userType = "Member";
	$address = $_POST['address'];
	$level = $_POST['level'];
	$specialty = "NULL";



	$conn = mysqli_connect("localhost","root","","helpfit");

	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	if (isset($_POST['submit'])) {

		if (!empty($fullName)&&!empty($userName)&&!empty($password)&&!empty($email)&&!empty($address)&&!empty($level)) {

			$checkEmail = mysqli_query($conn,"SELECT email FROM member where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already sign Up!!")';
				echo '</script>';
				echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
			}else{

				$checkUserName = mysqli_query($conn,"SELECT email FROM member where email ='$userName'");

				$row = mysqli_fetch_array($checkUserName);
				$data1 = $row[0];

				if($data1){
					echo '<script language = "javascript">';
					echo 'alert("This userName already exist!!")';
					echo '</script>';
					echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
				}else{

					if ($password == $cPassword) {

						$sql = "INSERT INTO member (fullName, userName, password, email, level, address)	VALUES ('$fullName','$userName','$password','$email', '$level','$address')";

						if ($conn->query($sql) == TRUE && mysqli_affected_rows($conn) >0){

							echo '<script language = "javascript">';
							echo 'alert("Record Added successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('homepage.php'); </script>";
						}
						else
						{
							echo " Error Adding record: ".$conn->error;
						}

					}else{
					echo '<script language = "javascript">';
					echo 'alert("The password must be same")';
					echo '</script>';
					echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
					}
				}
			}

		}else{
				echo '<script language = "javascript">';
				echo 'alert("All the field most be completed")';
				echo '</script>';
				echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
			}
	}



	$conn->close();
?>
