<!DOCTYPE html>
<html>
<head>
	<title>Log In Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">
	<!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/rating_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

 function change(id)
 {
		var cname=document.getElementById(id).className;
		var ab=document.getElementById(id+"_hidden").value;
		document.getElementById(cname+"rating").innerHTML=ab;

		for(var i=ab;i>=1;i--)
		{
			 document.getElementById(cname+i).src="symbol/star2.png";
		}
		var id=parseInt(ab)+1;
		for(var j=id;j<=5;j++)
		{
			 document.getElementById(cname+j).src="symbol/star1.png";
		}

 }

</script>
</head>
<body>


		<h1>Star Rating System Using PHP and JavaScript</h1>
<br><br><br><br><br><br><br><br><br><br>><br><br><br><br><br><br><br>
<form method="post" action="insert_rating.php">

  <div class="rate_input">
	  <input type="hidden"  name="phprating1" id="php1_hidden" value="1">
	  <img src="symbol/star1.png" onclick="change(this.id);" id="php1" class="php">
	  <input type="hidden"  name="phprating2" id="php2_hidden" value="2">
	  <img src="symbol/star1.png" onclick="change(this.id);" id="php2" class="php">
	  <input type="hidden"  name="phprating3" id="php3_hidden" value="3">
	  <img src="symbol/star1.png" onclick="change(this.id);" id="php3" class="php">
	  <input type="hidden"  name="phprating4" id="php4_hidden" value="4">
	  <img src="symbol/star1.png" onclick="change(this.id);" id="php4" class="php">
	  <input type="hidden"   name="phprating5" id="php5_hidden" value="5">

		<span><img src="symbol/star1.png" onclick="change(this.id);" id="php5" class="php">
		<input type="hidden" name="phprating" id="phprating" value="0"></span>
  </div>






	<button type="submit" name="submit_rating" class="btn btn-success col-xs-4 col-xs-offset-1 active btnGetRate">Submit</button>
	<button type="reset" class="btn btn-danger  col-xs-4 col-xs-offset-2">Cancel</button>
</form>
  <script type="text/javascript" src="js/getRating.js"></script>
</body>
</html>
