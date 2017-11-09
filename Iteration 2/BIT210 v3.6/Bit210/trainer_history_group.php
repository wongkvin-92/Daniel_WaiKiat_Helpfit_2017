<?php
  error_reporting(0);
  session_start();
  include("connection.php");

  if ( $_SESSION['checkLoginTrainer'] != '1') {

          echo '<script language = "javascript">';
          echo 'alert("You have to login first.")';
          echo '</script>';
          echo  "<script> window.location.assign('login_page.php'); </script>";
          exit;
  }
  $fullName = $_SESSION['userFullName'];
?>
<!DOCTYPE html>
<html >
<head>
  <title>Trainer View Training History (Group Session)</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link  rel="stylesheet" href="css/bootstrap.min.css">
  <!--Bootstrap & Footawesome & Bootrap-social styles-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" >
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <!-- Custom styles for this webpage -->
  <link href="css/trainer/training_history.css" rel="stylesheet">
  <!--JS script-->
  <!--Jquery open source link library-->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Datatable bootstrap open source link library-->
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" ></script>
  <!--Datatable Jquery open source link library-->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <!--CDJNS Prefixfree open source link library-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <!--Bootstrap Javascript-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/trainer_history.js" async></script>
</head>

<body>
  <!--Navigation bar on top of the page-->
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--logo button of the website on the top left corner-->
            <a  href="trainer_homepage.php">
              <image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="trainer_homepage.php">Trainer
            </a>
            <ul class="dropdown-menu">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a></li>
            </ul>
          </li>
        </ul>
          </div>
        </div>

      </div>
    </nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
          <div class="sidebar-header ">
            <!-- The User Info in the Sidebar-->
            <div class="img-sidebar-header">
            <!--Image of the user-->
            <img src="symbol/rahim.jpg" class="img-responsive img-circle" alt="">
            <!--The hidden button for the hover effect on the photo -->
            <div class="hidden-btn-image">
              <form action="#">
                <input type="file" name="pic" accept="image/*" >
                <input type="submit">
              </form>
            </div>
          </div>
          <?php

            $conn = mysqli_connect("localhost","root","","helpfit");

              if ($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
                //echo "testing 1";
              }

              $trainer = $_SESSION['user_ID'];
              $result = $conn->query("SELECT fullName FROM trainer  where trainerID = '$trainer'");
              $rs = $result->fetch_array();
          ?>
          <div class="userinfo-title">
            <div class="userinfo-title-name">
                <?php echo $rs['fullName']?>
            </div>
              <div class="userinfo-title-job">
                Personal Trainer
              </div>
            </div>
           </div>
           <!--List unstyled class to Remove the default list-style--->
           <!-- The menu tabs of the sidebar -->
           <ul class="list-unstyled components">
             <hr  class="line-sidebar">
               <li class="menu-spacing">
                  <a href="trainer_homepage.php">
                      <i class="glyphicon glyphicon-home"></i>
                      Home
                  </a>
               </li>
               <li class="menu-spacing">
                <a href="trainer_edit_profile.php">
                  <i class="glyphicon glyphicon-pencil"></i>
                    Edit Profile
                </a>
              </li>
              <li class="menu-spacing">
               <a href="trainer_rec_session.php">
                 <i class="	glyphicon glyphicon-plus-sign"></i>
                   Create Session
               </a>
             </li>
              <!--The id "pageSubmenu" is the sub menu of the View History-->
              <li class="menu-spacing active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                  <i class="glyphicon glyphicon-duplicate"></i>
                    View History
                </a>
                <ul class="collapse list-unstyled hoversub" id="pageSubmenu">
                  <li ><a href="trainer_history_personal.php">Personal Training Sessions</a></li>
                  <li class="active"><a href="trainer_history_group.php">Group Training Sessions</a></li>
                </ul>
              </li>
            </ul>
        </nav>

        <!-- Page Content of the Page -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!--There will be a button to show and hide the sidebar-->
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn ">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Training History Table (Group)</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Fee</th>
                        <th>Status</th>
                        <th>Max Participant</th>
                        <th>Num Participant</th>
                        <th><em class="fa fa-cog"></em></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $conn = mysqli_connect("localhost","root","","helpfit");

                          if ($conn->connect_error){
                            die("Connection failed: ".$conn->connect_error);
                            //echo "testing 1";
                          }

                          $type="Group Training Session";
                          $result = $conn->query("SELECT * FROM trainingsession where sessionType = '$type'");


                         foreach ($result as $key => $rs) {

                      ?>
                    <tr>
                      <td><?php echo $rs["titel"];?></td>
                      <td><?php echo $rs["date"];?></td>
                      <td><?php echo $rs["time"];?></td>
                      <td><?php echo $rs["feee"];?></td>
                      <td><?php echo $rs["status"];?></td>
                      <td><?php echo $rs["maxParticipants"];?></td>
                      <td><?php echo $rs["countPart"];?></td>

                      <td>
                        <div class="text-center">
                        <a href="trainer_session_group_edit.php"class="btn btn-default"><em class="fa fa-pencil"></em></a>
                      </div>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                    </tbody>
                  </table>
                  <div class="panel-footer">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer-hide-show">
          <div class= "row">
            <div class="footer-main">
              <div class="col-xs-2 col-sm-2  col-sm-offset-1 footerbrand">
                <a href="trainer_homepage.php">HELPFit</a>
              </div>
            </div>
            <div class=footerlink>
              <div class="col-xs-3 col-sm-3">
                <a href="trainer_about.php" id="footerlink_1">ABOUT</a>
              </div>
              <div class="col-xs-3 col-sm-3  col-sm-offset-1">
                <a href="trainer_contact.php" id="footerlink_2">CONTACT</a>
              </div>
              <div class="col-xs-3 col-sm-3  col-sm-offset-2  col-xs-offset-1">
                <a href="trainer_faqpage.php" id="footerlink_3">FAQ</a>
              </div>
            </div>
            <div class="socialbtn">
              <div class="col-xs-2 col-sm-2 a">
                <a href="https://www.instagram.com/helpfit.id/?hl=en" class="btn btn-social-icon btn-instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
              <div class="col-xs-2 col-sm-2 col-sm-offset-1  col-xs-offset-1">
                <a href="https://www.facebook.com/HelpFit.ID/" class="btn btn-social-icon btn-facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
          </div>
        </footer>
     <!--The script needs to be loaded while the page is executed-->
        <script>
          $(document).ready(function() {
            $('#example').DataTable();
          } );
        </script>
  </body>
</html>
