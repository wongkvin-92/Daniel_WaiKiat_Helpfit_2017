<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Selection Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">

	<!-- Custom styles for this template -->
    <link href="css/selectionpage.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


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

        		<a href="homepage.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
        		<h1>Create An Acount</h1>

        	<hr>

        	<div class="midBox">
        		<a href="trainer_signUpForm.php" class="btn btn-primary btn-lg">Trainer</a>
        		<br/>
        		<br/>
        		<a href="member_signUpForm.php" class="btn btn-primary btn-lg">Member</a>
        		<!--<a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
        		<i class="fa fa-address-book-o" aria-hidden="true"></i>-->
        	</div>

        	<hr>

        	<div class="lsBox pull-right">
        		<h3>Already Sign Up, <a href="login_page.php" class="">Login here </a></h3>
        	</div>
        </div>



</body>
</html>
