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
<html>
<head>
	<title>Record Group Training Session</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">
	<link rel='stylesheet prefetch' href='http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
	<!-- Custom styles for this template -->
    <link href="css/trainer/trainer_form_style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
					<!--logo button of the website on the top left corner-->
					<a  href="trainer_homepage.php" >
						<image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
					</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li ><a href="#">WHO WE ARE</a></li>
            <li><a href="#about">GET INVOLVED</a></li>
            <li><a href="#contact">Contact</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>
     <div class="box col-xs-10 col-xs-offset-1 ">
        	<br/>
        		<a href="trainer_rec_session.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
        		<h1>Group Training Session</h1>
        	<br/>
        	<hr>
        	<br/>
        	<div class="midBox">

				<!--Example 1: Vertical Form-->
				<form class="form" method="POST" action="addGpSession.php">


				     	<div class="row ">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1" >
				                    <input type="text" name="title" class="form-control input-lg" id="inputName" placeholder="Title" value="<?php echo $_SESSION['title'];?>">
				        		    </div>
				            </div>
				          </div>
				    </br>

				    <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                     <input type="text" class="form-control input-lg" id="datepicker" name="date" placeholder="Date" value="<?php echo $_SESSION['date'];?>">
				                </div>
				            </div>
				          </div>
				        </br>
				        <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="time" name="time" class="form-control input-lg" id="inputName" placeholder="Time" value="<?php echo $_SESSION['time'] ;?>">
				                </div>
				            </div>
				          </div>
				    </br>
						<div class="row ">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1" >
				                    <input type="text" name="fee" class="form-control input-lg" id="inputName" placeholder="Fees" value="<?php echo $_SESSION['fee'];?>">
				        		    </div>
				            </div>
				          </div>



				        </br>
				        <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="text" name="maxParticipant" class="form-control input-lg" id="inputName" placeholder="Max Participant" value="<?php echo $_SESSION['max'];?>">
				                </div>
				            </div>
				          </div>


				        </br>
				        <div class="row">
				            <div class="form-group">
				                <div class="col-xs-10 col-xs-offset-1">
				                    <select name="classType" class="form-control">
				                        <option>Type</option>
				                        <option>Sport</option>
				                        <option>Dance</option>
				                        <option>MMA</option>
				                    </select>
				                </div>
				             </div>
				          </div>
				        	</br>
				        	<button type="submit" name="submit" class="btn btn-success col-xs-4 col-xs-offset-1 active">Create</button>
				        	<button type="reset"  class="btn btn-danger  col-xs-4 col-xs-offset-2">Cancel</button>
				         	</br></br></br>
					</form>
      </div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script  type="text/javascript">
    $(function() {
      $( "#datepicker" ).datepicker({
      	dateFormat:"dd MM yy"
      });
    });

	  jQuery(function() {
	  jQuery( "#datepicker" ).datepicker( 'option', 'minDate', '0');
	  });
    </script>
</body>
</html>
