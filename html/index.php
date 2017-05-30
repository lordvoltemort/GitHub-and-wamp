<!DOCTYPE html>
<html>
<head>
	<!-- Link for header file -->
    <link rel="stylesheet" type="text/css" href="header.css">
<!--End of css file for header-->
    
<!-- Link for footer file -->
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Header</title>
<!--End of css file for footer-->

<!-- Header file start here -->
    <div class="navbar-header">
      <div class="navbar-header-container">
        <a href="#">Home</a>
        <a href="#">Contact us</a>
        <a href="#">About</a>
        <a href="#">Feedback</a>
        <a href="#">Refer_and_earn</a>
        <a href="Login.html" style="float: right;">Login</a>
        </div>
  </div>

	<title>Avablity of Bikes </title>
</head>
<body>



<?php
	$startdate = $_REQUEST['Start_trip'];
	$enddate = $_REQUEST['end_trip'];

	echo ("start_date is ".$startdate);
	echo ("<br> end_date is ".$enddate);
	
?>







<!-- start of footer-->
<div class="container">
<h3></h3>
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway" id="txt-railway"><center><b> Connect with us on </b></center></p>
            <br />
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:1234@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div>
<!-- end of footer-->

</body>
</html>


