<?php
	//error_reporting(0);
	session_start();
	$rateValue = $_POST['phprating'];
	$rateValue1 = $_POST['phprating1'];
	$rateValue2 = $_POST['phprating2'];
	$rateValue3 = $_POST['phprating3'];
	$rateValue4 = $_POST['phprating4'];
	$rateValue5 = $_POST['phprating5'];

	//$rating = $ratevalue .' '.$ratevalue1.' '.$

	$conn = mysqli_connect("localhost","root","","helpfit");

	if (mysqli_connect_errno($conn)) {
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	if (isset($_POST['submit_rating'])) {

		if (isset($rateValue)) {
			//$rateValue +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue')";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}
		}elseif (isset($ratevalue1)) {
			//$rateValue1 +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue1')";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully!")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}

		}elseif (isset($ratevalue2)) {
			//$rateValue1 +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue2')";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully!!")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}
		}elseif (isset($ratevalue3)) {
			//$rateValue1 +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue3')";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully!!!")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}
		}elseif (isset($ratevalue4)) {
			//$rateValue1 +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue4)";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully!!!!")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}
		}elseif (isset($ratevalue5)) {
			//$rateValue1 +=1;
			$insert="INSERT INTO rating (ratingNum) VALUES ('$rateValue5')";

			if ($conn->query($insert) == TRUE && mysqli_affected_rows($conn) >0){

				echo '<script language = "javascript">';
				echo 'alert("Record Added successfully!!!!!")';
				echo '</script>';

			}
			else
			{
				echo " Error Adding record: ".$conn->error;
			}
		}


}

$conn->close();
?>
