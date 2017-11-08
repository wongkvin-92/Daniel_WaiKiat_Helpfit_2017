<?php
  error_reporting(0);
  session_start();
  include("connection.php");

  if ( $_SESSION['checkLoginMember'] != '1') {

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
	<title>Review Trainer Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">
	<!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/trainer-review.css" x>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/member_sign_up_form_validation.js" async></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

					<!--logo button of the website on the top left corner-->
					<a  href="member_homepage.php" >
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

					<a href="member_history.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
					<h1>Review Trainer</h1>

				<hr>

				<div class="midBox">
					<!--Use onsubmit to call the javascript function-->
					<form class="form" name="member_signup" action="#"  method="POST">

						<div class="centerBox col-xs-6 col-xs-offset-3">

							<div class="row ">
				            	<div >
				            		<label> Please rate </label>
				          		</div>
			          		</div>

							<div class="row ">
								<div class="form-group">
									<div  >
					                  <fieldset>
					                    <span class="star-cb-group">
					                        <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
					                        <input type="radio" id="rating-4" name="rating" value="4" /><label for="rating-4">4</label>
					                        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
					                        <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
					                        <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
					                        <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
					                      </span>
					                    </fieldset>
									</div>
								</div>
							</div>
							</br>
				            <div class="row">
				              <div  >
				                <label>Comment</label>
				              </div>
				            </div>
							<div class="row">
								<div class="form-group">

									<div >
										<textarea name="content" v-model="content"></textarea>
									</div>
								</div>
							</div>
							</br>

							 </br>
		             		<div >
								 <button type="submit" class="btn btn-success btn-lg active">Submit</button>
		           			</div>
		             		</br>
							 </br>
							 </br>
						</div>

					 </form>
				</div>
		</div>

  </body>
</html>
