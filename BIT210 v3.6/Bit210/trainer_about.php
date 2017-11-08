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
  <meta charset="UTF-8">
  <title>HELPFit About Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!--Bootstrap & Footawesome & Bootrap-social styles-->
  <link  rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/footerlink-page.css">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <!--Bootstrap Javascript-->
  <script src="js/bootstrap.min.js"></script>

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
            <a href="trainer_homepage.php">
              <image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right sign_out_sub">
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

  <div class="row">
      <div class="panel-heading"><h1>About</h1></div>
  <div class="col-md-4">

    <div class="panel-group">

      <ul class="list-unstyled">
        <li class="panel panel-filled support-question active">
          <a href="#answer1" data-toggle="tab" aria-expanded="true">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 1</p>
              <p>
                OUR STORY.
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer2" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 2</p>
              <p>
                OUR FITNESS PHILOSOPHY.
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer3" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 3</p>
              <p>
                OUR FITNESS PHILOSOPHY
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer4" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 4</p>
              <p>
                OUR FITNESS PHILOSOPHY
              </p>
            </div>
          </a>
        </li>
      </ul>

    </div>

  </div>
  <div class="col-md-8">

    <div class="panel">
      <div class="panel-body">
        <div class="tab-content">
          <div id="answer1" class="tab-pane active">
            <h3>
                                       OUR STORY
            </h3>
            <p>
              In 2012, our HELPFit Fitness  club opened in Damansara in Kuala Lumpur. Today we have clubs in 16 different countries, making us a leader in the global fitness industry.
            </p>

            <p class="font-bold c-white">
              Corporate History
            </p>
            <p>
              The HELPFit Fitness  club in Malaysia opened in 2012 and now has more than 240,000 members who visit our 65 clubs more than 15 million times a year. In July 2013, HELPFit  launched The Zone in the Penang, a world  concept club offering a time efficient, highly motivating group training experience.
            </p>
            <p>
              The HELPFit Fitness  club in Malaysia opened in 2012 and now has more than 240,000 members who visit our 65 clubs more than 15 million times a year. In July 2013, HELPFit  launched The Zone in the Penang, a world  concept club offering a time efficient, highly motivating group training experience.
            </p>
            <p>The HELPFit Fitness  club in Malaysia opened in 2012 and now has more than 240,000 members who visit our 65 clubs more than 15 million times a year. In July 2013, HELPFit  launched The Zone in the Penang, a world  concept club offering a time efficient, highly motivating group training experience.
            </p>

          </div>

          <div id="answer2" class="tab-pane">
            <h2>
                OUR FITNESS PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>

          </div>
          <div id="answer3" class="tab-pane">
             <h2>
                OUR FITNESS PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>

          </div>
          <div id="answer4" class="tab-pane">
            <h2>
                OUR FITNESS PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>
            <p>
              We’ve seen a lot of change in the fitness industry over the years, but our philosophy has remained the same: to offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment that helps keep our members to achieve their fitness goals.
            </p>
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
</body>
</html>
