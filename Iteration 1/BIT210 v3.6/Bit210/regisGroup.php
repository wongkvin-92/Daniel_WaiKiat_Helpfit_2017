<?php
session_start();
$memberID = $_SESSION['user_ID'];
$sessionID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","helpfit");

  if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL: ".mysqli_connect_errno();
  }

  if (!empty($memberID)&&!empty($sessionID)) {

    $checkMember = mysqli_query($conn,"SELECT memberID, sessionID FROM registredtraining where sessionID ='$sessionID' and memberID = '$memberID'");

      $row = mysqli_fetch_array($checkMember);
      $data = $row[0];

      if($data){
        echo '<script language = "javascript">';
        echo 'alert("You have already regidtered for this session!!")';
        echo '</script>';
        echo  "<script> window.location.assign('member_register_session_group.php'); </script>";
      }else{

        $sql = "INSERT INTO registredtraining (memberID, sessionID) VALUES ('$memberID','$sessionID')";

            if ($conn->query($sql) == TRUE && mysqli_affected_rows($conn) >0){

              /*echo '<script language = "javascript">';
              echo 'alert("Registred successfully")';
              echo '</script>';
              echo  "<script> window.location.assign('member_homepage.php'); </script>";*/
              $sql1 = $conn->query("SELECT maxParticipants,countPart FROM trainingsession where sessionID = '$sessionID'");
              foreach ($sql1 as $key => $rs) {
                $maxParticipants = $rs['maxParticipants'];
                $countPart = $rs['countPart'];
              }

              $countPart ++;
              if ($maxParticipants == $countPart) {
                $full = "FULL";
                $sql2 = $conn->query("UPDATE trainingsession SET status = '$full', countPart = '$countPart' WHERE sessionID = $sessionID");
                echo '<script language = "javascript">';
                echo 'alert("Registered successfully!")';
                echo '</script>';
                echo  "<script> window.location.assign('member_homepage.php'); </script>";
              }else{
                $sql3 = $conn->query("UPDATE trainingsession SET countPart = '$countPart' WHERE sessionID = $sessionID");
                echo '<script language = "javascript">';
                echo 'alert("Registered successfully!!")';
                echo '</script>';
                echo  "<script> window.location.assign('member_homepage.php'); </script>";
              }
            }
            else
            {
              echo " Error Adding record: ".$conn->error;
              echo '<script language = "javascript">';
              echo 'alert("Registration failed!!")';
              echo '</script>';
              echo  "<script> window.location.assign('member_register_session_group.php'); </script>";
            }
      }
  }
  mysqli_close($conn);

?>
