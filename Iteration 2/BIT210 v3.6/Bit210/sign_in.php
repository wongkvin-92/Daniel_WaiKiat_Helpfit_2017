<?php
	//error_reporting(0);
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = mysqli_connect("localhost","root","","helpfit");

	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
		//echo "testing 1";
	}

	if (isset($_POST['submit'])) {
		//echo "testing 2";
		if (!empty($username)&&!empty($password)) {

			$sql1 = $conn ->query("DROP TABLE IF EXISTS users");

			$sql2 = $conn ->query("create table  users   as (SELECT memberID as userID,fullName, userName,email, password,userType FROM   member  )UNION ALL (SELECT trainerID as userID,fullName, userName,email, password, userType FROM   trainer )");

			$result = $conn->query("SELECT * FROM users WHERE userName='$username' and password='$password'");


			 while($rs = $result->fetch_array())
			{
				$_SESSION['user_ID'] = $rs["userID"];
				$_SESSION['userFullName'] = $rs["fullName"];
		        $_SESSION['user_Name'] = $rs['userName'];
		        $_SESSION['user_Email'] = $rs['email'];
		        $_SESSION['user_Password'] = $rs['password'];
		        $_SESSION['user_Type'] = $rs['userType'];
			}

			$fullName = $_SESSION['userFullName'];

			if ($_SESSION['user_Type'] == 0) {
				$_SESSION['checkLoginMember'] = 1;
			}else{
				$_SESSION['checkLoginTrainer'] = 1;
			}

			 if ($_SESSION['user_Name'] == $username && $_SESSION['user_Password'] == $password) {

			 	if ($_SESSION['user_Type'] == 1) {

					  echo sprintf('<script type="text/javascript"> alert("Welcome at Helpfit: %s");</script>', $fullName);

			 	 	echo  "<script> window.location.assign('trainer_homepage.php'); </script>";

			 	 } else{
					echo sprintf('<script type="text/javascript"> alert("Welcome at Helpfit: %s");</script>', $fullName);
			 	 	echo  "<script> window.location.assign('member_homepage.php'); </script>";
			 	 }

			 }else{
			 	echo '<script language = "javascript">';
             	echo 'alert("Username and Password  are not found.")';
             	echo '</script>';
                echo  "<script> window.location.assign('login_page.php'); </script>";
			 }


		}else{
			echo '<script language = "javascript">';
          	echo 'alert("Please fill all the field.")';
          	echo '</script>';
          	echo  "<script> window.location.assign('login_page.php'); </script>";
		}
	}



	$conn->close();

?>
