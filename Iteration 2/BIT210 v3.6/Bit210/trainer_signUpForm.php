<?php 
	function remenberUserInput($uInput){
		if (isset($_POST[$uInput])) {
			echo $_POST[$uInput];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trainer Sign_Up page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trainer Sign Up Form</title>
	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">

	<!-- Custom styles for this template -->
    <link href="css/trainer/trainer_form_style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/trainer_sign_up_form_validation.js" async></script>

</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
					<!--logo button of the website on the top left corner-->
					<a  href="homepage.php" >
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

        		<a href="sign_up_selection.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
        		<h1>Trainer</h1>

        	<hr>
<!--onsubmit="return(validate(this));"-->
        	<div class="midBox">

				<!--Example 1: Vertical Form-->
				<form class="form" method="POST" name="trainer_signup" action="trainer_sign_Up.php" >


				     	<div class="row ">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1" >
				                    <input type="text" name="fullname" class="form-control input-lg" id="fullname" placeholder="Full Name" value="<?php remenberUserInput('fullname');?>">
				        		    </div>
				            </div>
				          </div>


				    </br>

				    <div class="row">
				        <div class="form-group">

				            <div class="col-xs-10 col-xs-offset-1">
				                <input type="text" name="username" class="form-control input-lg" id="username" placeholder="User Name" value="<?php remenberUserInput('username');?>">
				            </div>
				        </div>
				    </div>

				        </br>
				        <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="text" name="emailadd" class="form-control input-lg" id="emailadd" placeholder="Email" value="<?php remenberUserInput('emailadd');?>">
				                </div>
				            </div>
				          </div>


				        </br>
				        <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" >
				                </div>
				            </div>
				          </div>

				        </br>
						<div class="row">
							<div class="form-group">
								<div class="col-xs-10 col-xs-offset-1">
									<input type="password" name="confirmpass" class="form-control input-lg" id="confirmpass" placeholder="Confirm Password" >
								</div>
							</div>
						</div>
						</br>
				        <div class="row">
				            <div class="form-group">

				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="text" name="address" class="form-control input-lg" id="address" placeholder="Address" value="<?php remenberUserInput('address');?>">
				                </div>
				            </div>
				          </div>

				        </br>
				        <div class="row">
				            <div class="form-group">
				                <div class="col-xs-10 col-xs-offset-1">
				                    <input type="text" name="Speciality" class="form-control input-lg" id="Speciality" placeholder="Speciality" value="<?php remenberUserInput('Speciality');?>">
				                </div>

				            </div>
				          </div>

				        </br>
				                <button type="submit" name="submit" class="btn btn-success col-xs-4 col-xs-offset-1 active">Submit</button>
												<button type="reset"  class="btn btn-danger  col-xs-4 col-xs-offset-2">Cancel</button>


	</br>
	</br>
				</form>

        	</div>
	</div>

</body>
</html>
