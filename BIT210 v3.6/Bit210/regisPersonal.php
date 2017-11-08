<?php
session_start();
$memberID = $_SESSION['user_ID'];
$sessionID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","helpfit");

	if (mysqli_connect_errno($conn)) {
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}

	if (!empty($memberID)&&!empty($sessionID)) {

		$checkEmail = mysqli_query($conn,"SELECT memberID, sessionID FROM registredtraining where sessionID ='$sessionID' and memberID = '$memberID'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already registered for this session!!")';
				echo '</script>';
				echo  "<script> window.location.assign('member_register_session_personal.php'); </script>";
			}else{

				$sql = "INSERT INTO registredtraining (memberID, sessionID)	VALUES ('$memberID','$sessionID')";

						if ($conn->query($sql) == TRUE && mysqli_affected_rows($conn) >0){

							echo '<script language = "javascript">';
							echo 'alert("Registered successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('member_homepage.php'); </script>";
						}
						else
						{
							echo " Error Register subject: ".$conn->error;
							echo '<script language = "javascript">';
							echo 'alert("Registration failed!!")';
							echo '</script>';
							echo  "<script> window.location.assign('member_register_session_personal.php'); </script>";
						}
			}
	}
	mysqli_close($conn);

?>
