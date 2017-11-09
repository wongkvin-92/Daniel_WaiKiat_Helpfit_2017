<?php

	$fullName = $_POST['fullname'];
	$userName = $_POST['username'];
	$password = $_POST['password'];
	$cPassword = $_POST['confirmpass'];
	$email = $_POST['emailadd'];
	$address = $_POST['address'];
	$specialty = $_POST['Speciality'];



	$conn = mysqli_connect("localhost","root","","helpfit");

	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	if (isset($_POST['submit'])) {


			$checkEmail = mysqli_query($conn,"SELECT email FROM user where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already sign Up!!")';
				echo '</script>';
				echo  "<script> window.location.assign('trainer_signUpForm.php'); </script>";
			}else{

				$checkUserName = mysqli_query($conn,"SELECT userName FROM trainer where userName ='$userName'");

				$row = mysqli_fetch_array($checkUserName);
				$data1 = $row[0];

				if($data1){
					echo '<script language = "javascript">';
					echo 'alert("This userName already exist!!")';
					echo '</script>';
					echo  "<script> window.location.assign('trainer_signUpForm.php'); </script>";
				}else{


						$sql = "INSERT INTO trainer (fullName, userName, password, email, address, specialty)	VALUES ('$fullName','$userName','$password','$email','$address','$specialty')";

						if ($conn->query($sql) == TRUE && mysqli_affected_rows($conn) >0){

							echo '<script language = "javascript">';
							echo 'alert("Record Added successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('homepage.php'); </script>";
						}
						else
						{
							echo " Error Adding record: ".$conn->error;
							echo  "<script> window.location.assign('trainer_signUpForm.php'); </script>";
						}


				}

			}

	}



	$conn->close();
?>
