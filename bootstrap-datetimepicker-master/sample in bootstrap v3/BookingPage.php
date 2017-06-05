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
		echo '<a href="logout.php">Log Out</a>';

		displayImageWithButton();
		displayImageWithoutButton();

	}
	else{
		echo "Please login first for booking...";
		displayImageWithButton();
		displayImageWithoutButton();

	}

		function displayImageWithButton() {
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry = "SELECT bikes.user_id , images.image , images.image_id FROM `bikes` INNER JOIN images ON bikes.image_id = images.image_id AND bikes.user_id IS NULL ;";
			$result = mysqli_query($con,$qry);
			while ($row = mysqli_fetch_array($result)) {
			echo "<form method = 'POST' action = '' >";
			$s = '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' " ';
			echo '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' "  >';
			@$GLOBALS['image_id'] = $row['image_id'];
			@$s = $s +'id = ' + $row['image_id'] +' >';
	//			echo $s;
			//@$items[$i] = $row['image_id'];
			echo '<br> <input type ="button" name = "getId" value = "Click to book" onclick = " myFunction(' . $s . ')">  ';
			echo "</form>";
			//@$i++;
			//displayImageId($image_id);
		}
		mysqli_close($con);
		
	}


	function displayImageWithoutButton() {
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry = "SELECT bikes.user_id , images.image , images.image_id FROM `bikes` INNER JOIN images ON bikes.image_id = images.image_id AND bikes.user_id IS NOT null ;";
			$result = mysqli_query($con,$qry);
			while ($row = mysqli_fetch_array($result)) {
			echo "<form method = 'POST' action = '' >";
			$s = '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' " ';
			echo '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' "  >';
			@$GLOBALS['image_id'] = $row['image_id'];
			@$s = $s +'id = ' + $row['image_id'] +' >';
	//			echo $s;
			//@$items[$i] = $row['image_id'];
			echo "</form>";
			//@$i++;
			//displayImageId($image_id);
		}
		mysqli_close($con);
		
	}



?>