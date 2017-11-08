<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">
	<!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

        		<a href="login_page.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
        		<h1>Forgot Password</h1>

        	<hr>

        	<div class="midBox">
        		<!--Example 1: Vertical Form-->
                <form class="form" method="POST" action="sendPass.php">
                        <div class="row ">
                            <div class="form-group">

                                <div class="col-xs-10 col-xs-offset-1" >
                                    <input type="email" name="email" class="form-control input-lg" id="inputName" placeholder="Email Address" required>
                                </div>

                            </div>
                          </div>
                    </br>
                        <button type="submit" name="resetPass" class="btn btn-success col-xs-4 col-xs-offset-1 active">Submit</button>

                    </br>

                </form>

        	</div>

        	<hr>

        </div>
</body>
</html>
