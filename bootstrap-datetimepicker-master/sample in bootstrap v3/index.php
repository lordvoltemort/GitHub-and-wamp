
<?php 
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin())
{
	$firstname = getuserfield('$username');
	$surname = getuserfield('surname');
	echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/>';
	//echo '<a href="logout.php">Log Out</a>';
}
else
{
	include 'loginform.inc.php';
}	
?>


<html>
<head>
	</head>
<body>
	<div  id="offers">
	<form action="logout.php" method="post">
		<p style="float: right; margin-top: 1px;"> <?php //echo "$firstname  $surname" ?></p>
		<span style="float: right; padding-top: 30px; margin-top: 1px;">
			<input type="submit" name="logout" value="logout" style=" float: right; width: 100px; height: 30px; ">	
		</span>
	</form>
	</div>
</body>
</html>