<html>
  <head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet"  href="css/homepage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/homepage.js" async></script>

  </head>
  <body>
    <nav class="navbar navbar-fixed-top nav-color" data-spy="affix" data-offset-top="800">
      <div class="container">
        <div class="navbar-header">
          <!--To have the button when the page in mobile site with 3 lines using the span tag-->
          <button type="button" class="navbar-toggle collapsed " data-toggle="collapse"
          data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse ">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="sign_up_selection.php">Sign Up</a></li>
            <li><a href="login_page.php">Login</a></li>
            <!--<li><a href="#contact">Contact</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div >
      <image src="symbol/bgMain1.jpg" class="img-responsive" alt="Responsive" id="firstbg">
        <a  href="homepage.php">
          <image src="symbol/logoimg.png" alt="img_logo" id="img_logo">
        </a>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

          <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="symbol/carousel1a.png" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="symbol/carousel2b.jpg" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="symbol/carousel3c.png" alt="New york" style="width:100%;">
          </div>
        </div>

          <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div  id="third_section_container">
        <h1 class="col-xs-12 col-sm-4 col-sm-offset-1" id="third_section_caption">No
          <div class="popEffect">
            <span>Shortcut</span>
            <span>Excuse</span>
            <span>Failure</span>
            <span>Shit</span>
            <span>Doubts</span>
          </div>
        </h1>
        <div class="row">
          <h1 class="col-xs-12 col-sm-6" id="third_section_caption2">
            Work For It
          </h1>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-offset-5 col-sm-offset-5">
            <a href="sign_up_selection.php" class="btn btn-primary btn-lg btn-effect btn-effect5 btn-effect5a" role="button">
              <span class="icon glyphicon glyphicon-edit"></span>
              <span class="text">Sign Up</span>
            </a>
          </div>
        </div>
     </div>

     <div id="last_section">
       <image src="symbol/last_main_img.jpg" class="img-responsive" alt="Responsive" id="lastbg">
         <div class="row block">
           <div class="col-xs-4 col-sm-4">
             <div class="circle-text">
               <div class="circle_1">
                 <span>
                 <i class="fa fa-male fa-5x" id="circle-text-symbol"></i>
                <span >
                  <p id="circle_caption">Quality</p>
                  <p>Trainers</p>
                </span>
                </span>
              </div>
             </div>
           </div>
           <div class="col-xs-4 col-sm-4 circle_2">
             <div class="circle-text ">
               <div>
                 <span>
                   <i class="fa fa-edit fa-5x" id="circle-text-symbol2"></i>
                   <span >
                     <p id="circle_caption">Track Your</p>
                     <p>Progress</p>
                   </span>
                 </span>
               </div>
             </div>
           </div>
           <div class="col-xs-4 col-sm-4">
             <div class="circle-text">
               <div class="circle_3">
                 <span>
                   <i class="fa fa-money fa-5x" id="circle-text-symbol3"></i>
                   <span >
                     <p id="circle_caption">Executive</p>
                     <p>Deals</p>
                   </span>
                 </span>
               </div>
             </div>
         </div>
         <!--
         style="width: 40%; height:40%; top: 15%; left:30%; position: absolute;"
         style="width: 50%; height:50%; top: 12%; left:25%; position: absolute;"
       -->
      </div>
      <footer>
      <div class= "row">
        <div class="footer">
          <div class="col-xs-2 col-sm-2 footerbrand col-sm-offset-1">
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
     <a href="#" class="scroll_top" onclick="toggleColor()" id="btn-scroll-top"><span class="fa fa-arrow-up fa-2x"></span>Top</a>
   </footer>
  </body>
</html>
