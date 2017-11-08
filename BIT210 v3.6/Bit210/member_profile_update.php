<?php
	session_start();
	$fullName = $_POST['fullname'];
	$userName = $_POST['username'];
	$password = $_POST['password'];
	$cPassword = $_POST['confirmpass'];
	$email = $_POST['emailadd'];
	$address = $_POST['address'];
	$level = $_POST['level'];

	$ID = $_SESSION['user_ID'];


	$conn = mysqli_connect("localhost","root","","helpfit");

	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	if (isset($_POST['submit'])) {

		if (!empty($fullName)&&!empty($userName)&&!empty($password)&&!empty($cPassword)&&!empty($email)&&!empty($address)&&!empty($level)) {

					if ($password == $cPassword) {

						$sql = "UPDATE member SET fullName= '$fullName', userName= '$userName', password='$password', email='$email', address='$address', level='$level' WHERE memberID = $ID";

						if ($conn->query($sql) == TRUE && mysqli_affected_rows($conn) >0){

							echo '<script language = "javascript">';
							echo 'alert("Record edited successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('member_edit_profile.php'); </script>";
						}
						else
						{
							echo "Error adding data".$conn->error;
							echo '<script language = "javascript">';
			                echo 'alert("Data existed!")';
			                echo '</script>';
			                echo  "<script> window.location.assign('member_edit_profile.php'); </script>";
						}

					}else{
						echo '<script language = "javascript">';
						echo 'alert("The password must be same")';
						echo '</script>';
						echo  "<script> window.location.assign('member_edit_profile.php'); </script>";
					}
				}else{
					echo '<script language = "javascript">';
					echo 'alert("All the fields most be completed!")';
					echo '</script>';
					echo  "<script> window.location.assign('member_edit_profile.php'); </script>";
			}
}



	$conn->close();
?>
