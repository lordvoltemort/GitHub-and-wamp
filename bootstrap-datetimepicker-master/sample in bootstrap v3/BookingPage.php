<form action="DisplayImageFromDB.php" method="post">
	<input type="submit" onclick="displayimage()">
</form>
<?php
	require 'core.inc.php';
	require 'connect.inc.php';

	$startdate = $_REQUEST['Start_trip'];
	$enddate = $_REQUEST['end_trip'];
	echo ("<br><br><br>start date is ".$startdate);
	echo ("<br> end date is ".$enddate ."<br>");


	if(loggedin())
	{
		$GLOBALS['userid'] = getuserfield('user_id');	
		$GLOBALS['firstname'] = getuserfield('username');
		$GLOBALS['surname'] = getuserfield('surname');
		echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/> userid is '. $userid;
		//echo '<a href="logout.php">Log Out</a>';
	}

//function was create to display images
/*Start */	
/*In this function image of availabe bike as booked bike will display and 

*/
		function displayimage(){
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry = "select * from images";
		$result = mysqli_query($con,$qry);
		while ($row = mysqli_fetch_array($result)) {
			echo '<img height ="300" width ="300" src="data:image;base64,' .$row[2]. ' "  >';
			echo ' <input type ="button" value = "Click to book" > ';
			echo '  ';
		}
		mysqli_close($con);
	}
/*end */
/*
	$qry = "UPDATE bikes SET start_date = '$startdate' , end_date = '$enddate' , user_id = '$userid' where bike_id = '' ;"
	if (mysqli_query($mysql,$qry)) {
		
	}
*/
