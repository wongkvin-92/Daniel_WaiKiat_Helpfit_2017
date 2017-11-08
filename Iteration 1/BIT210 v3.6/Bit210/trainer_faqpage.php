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
  <title>HELPFit FAQ Page</title>
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
            <a  href="trainer_homepage.php">
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
      <div class="panel-heading"><h1>FAQ</h1></div>
  <div class="col-md-4">

    <div class="panel-group">

      <ul class="list-unstyled">
        <li class="panel panel-filled support-question active">
          <a href="#answer1" data-toggle="tab" aria-expanded="true">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 1</p>
              <p>
                How can I get motivated to start or to stick with a healthy lifestyle?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer2" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 2</p>
              <p>
                I feel self-conscious about going to the gym. What do I do?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer3" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 3</p>
              <p>
                Why am I not losing body fat?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer4" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 4</p>
              <p>
               Can I lose fat and build muscle at the same time?
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
             How can I get motivated to start or to stick with a healthy lifestyle?
            </h3>
            <p>
              The best thing you can do is to stop thinking that "motivation" is going to be what gets you results. Trying to sustain going to the gym or changing your diet with motivation is like trying to warm your house with a firecracker.
            </p>

            <p class="font-bold c-white">

            </p>
            <p>
              It'll give you a short burst of energy and then nothing. Motivation is something you use to push through that last rep you're struggling with, not for sticking with a new practice. Thinking of this in terms of motivation is why you have failed in the past.
            </p>
            <p>
              The problem you're trying to solve is your consistency and your discipline. Motivation isn't going to keep you consistent or disciplined. They're on entirely opposite ends of the spectrum. Instead, create a habit. Do you fail to fill up the gas tank in your car because you don't have the motivation? No.
            </p>
            <p>You fill it up because you know it has to be done. Don't have your level of motivation or desire be what determines whether or not you go to the gym or stick with your diet. Instead, exercise discipline so you can stay consistent. See /r/getdisciplined for more discussion in this area.
            </p>

          </div>

          <div id="answer2" class="tab-pane">
            <h3>
                                        I feel self-conscious about going to the gym. What do I do?
                                    </h3>
            <p>
              You are not alone in this feeling. This is a common issue that comes up for people who are just starting on their fitness journey. There are two important things to think about when facing this feeling:
            </p>

            <p class="font-bold c-white">

            </p>
            <p>
              Everybody was a beginner once. Everyone you see in the gym who is much more strong/muscular/fit than you had to start somewhere, just like you are now. They likely started out somewhere very similar to you and even felt what you are feeling right now.
            </p>
            <p>
              The majority of people in the gym are much more focused on themselves and their own workout than they are on anything else, including you. If they even notice you at all, they likely view you as just another person who is sharing the same general space and aren't even giving you a second thought, let alone silently judging or laughing at you. If it seems like anyone is staring at or watching you, just assume it's out of encouragement instead of judgement.
              </p>
              <p>
              The best way to get past your fear/nervousness/uncertainty/self-consciousness is to just force yourself to keep the above in mind and just keep going to the gym until it becomes comfortable.

              Here's some additional advice from fitness model Jamie Eason on this subject.
            </p>

          </div>
          <div id="answer3" class="tab-pane">
            <h3>
                                        Why am I not losing body fat?
                                    </h3>
            <p>
              As it turns out, the expensive thing you (probably) bought to measure your body fat percentage doesn't actually work that well. Consumer grade methods of measuring body fat percentage are not precise or accurate enough to be reliable measures of weight or fat loss.
            </p>

            <p class="font-bold c-white">

            </p>
            <p>
              A multitude of factors that cannot be effectively controlled outside of a clinical environment can mean your actual body fat percentage is 5% (or more) greater or less than the number you get. Just because you see 20.7% one day and 21.4% the next doesn't mean you actually gained 0.7% bodyfat in a day.
            </p>
            <p>
              You'll unfortunately just have to trust the trend you see on the scale and know without being able to measure it directly that you're losing fat. Unless you have a serious and rare medical issue, if you're losing weight, you can't not be losing fat as part of it.
            </p>
            <p>If you want to maximize your results and look your best when you get down to a lower weight, you should make sure to do resistance training to help spare your muscle (and possibly gain a little as well) as you lose weight.
            </p>

          </div>
          <div id="answer4" class="tab-pane">
            <h3>
                                        Can I lose fat and build muscle at the same time?
                                    </h3>
            <p>
              A 2011 paper suggests a weekly rate of body-weight loss of 0.7% can permit muscle gain in both men and women while losing fat mass. Women were also able to increase muscle while losing fat at a weekly rate of body-weight loss of 1.0-1.4%. Men, however, lost muscle mass at this increased rate.
            </p>

            <p class="font-bold c-white">

            </p>
            <p>
              The ability to gain muscle while losing fat is dependent on the relationship between your fatness and muscularity. An overly-fat and under-trained person will be able to achieve simultaneous fat loss and muscle gain. A very lean person near his/her limit for muscle growth will not. As one moves away from the overly-fat, under-trained status towards a leaner, more muscular body this ability is diminished. At some point, the vast majority of people will see better/quicker results by choosing to do one or the other (gain muscle, lose fat - often referred to as 'bulking' and 'cutting', respectively) at a time. For a highly general rule of thumb: if you have been training effectively for a year or more, you're better off with a bulk/cut cycle. See Lyle McDonald's Adding Muscle While Losing Fat - Q&A for more discussion.
            </p>
            <p>
              In real terms, 0.7% body-weight loss was achieved via a daily deficit of 3.2 calories per lb of total bodyweight (or 7 calories per kg of total bodyweight). At this rate, your goal calorie intake = TDEE - [BWlb x 3.2kcal] (or TDEE - [BWkg x 7kcal]). This is a good place to start. The 1.0-1.4% range works out to a daily deficit of 4.5-6.4 calories per lb of total bodyweight (or 10-14 calories per kg of total bodyweight).
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
