<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>HELPFit Contact Page</title>
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
            <a  href="homepage.php">
              <image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="homepage.php">Home</a></li>
              <!--<li><a href="#contact">Contact</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>

      </div>
    </nav>

  <div class="row">
      <div class="panel-heading"><h1>Contact</h1></div>
  <div class="col-md-4">

    <div class="panel-group">

      <ul class="list-unstyled">
        <li class="panel panel-filled support-question active">
          <a href="#answer1" data-toggle="tab" aria-expanded="true">
            <div class="panel-body">
              <p class="font-bold c-white">Map</p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer2" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Contact Details</p>
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
            <div class="span8">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.1925689999025!2d101.54749191475703!3d3.0430029977839865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4d37aeb9bae7%3A0x58da7625b93efac7!2sPolice+Station+-+Pinggiran+USJ!5e0!3m2!1sen!2smy!4v1508399983990" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
            </div>
            <div class="span4">
    		        <h2>Address</h2>
    		          <address>
    			             <strong>Police Station - Pinggiran USJ</strong><br>
    			                1, Jalan TP 7/1,<br>
    			                Taman Perindustrian Uep,<br>
    			                47620 Subang Jaya,<br>
    			                Selangor<br>

    		          </address>
    	       </div>
          </div>

          <div id="answer2" class="tab-pane ">
            <h3>
              Contact Us
            </h3>
            <p>
              The best way to reach US
            </p>
            <ul>
              <li>Come in person At the Gym.</li>
              <li>Contact Us Throughout Social Pages At Bottom right corner.</li>
              <li>Drop Us an Email and we will get back to You.</li>
            </ul>
            <p class="font-bold c-white">

            </p>
            <p>
              Phone number: <a href="tel:+60 3-2716 2000">+60 3-2716 2000</a>
            </p>
            <p>
              We are ready to help in HELPFit Fitness club and message us via
              e-mail at
              <a href="mailto:help@edu.my?Subject=Welcome%20HelpFit"
                target="_top">help@edu.my
              </a>
              if you have any hassles.
                <br>
            </p>

            <br><br><br><br><br><br><br>
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
        <a href="homepage.php">HELPFit</a>
      </div>
    </div>
    <div class=footerlink>
      <div class="col-xs-3 col-sm-3">
        <a href="about.php" id="footerlink_1">ABOUT</a>
      </div>
      <div class="col-xs-3 col-sm-3  col-sm-offset-1">
        <a href="contact.php" id="footerlink_2">CONTACT</a>
      </div>
      <div class="col-xs-3 col-sm-3  col-sm-offset-2  col-xs-offset-1">
        <a href="faqpage.php" id="footerlink_3">FAQ</a>
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
