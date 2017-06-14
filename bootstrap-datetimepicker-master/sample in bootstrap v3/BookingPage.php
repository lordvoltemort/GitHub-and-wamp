<html>
<body>
<script >
/***************************************************************************************************************
 * Here first of get the image if from displayImageWithButton function and store the value of that particular 
 * image id in a javascript variable and call another function which is update the bikes table with the following 
 * data (userid,bikeid, startdate and enddate)
 **************************************************************************************************************/
	function myFunction(intvalue) {
		var xhttp;
		var val = intvalue;
		console.log("val is : " ,intvalue);
		
		
		
		 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","http://localhost/GITHUB/GitHub-and-wamp/bootstrap-datetimepicker-master/sample in bootstrap v3/getuser.php?q="+intvalue,true);
        xmlhttp.send();
		
}
</script>

<div id="txtHint"><b>user info will be listed here...</b></div>
</body>
</html>

<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	$userid = getuserfield('user_id');	

	//$enddate = "$startdate"
//	$enddate="14 September 2017  09:30 am";
//	$result = DateTime::createFromFormat('d M Y - h:i A', $startdate);
//	echo $result->format('Y-m-d H:i:s');
//	$s = "14 September 2017  09:30 am";
//	$enddate="20/04/2017 12:30 AM";
//	$date = strtotime($s);
//	echo date('Y-m-d:H:i:s', $date);

/**************************************************************************************************************** 
 *                                                                                                              * 
 * Here we check that user is login or not If loggedin then all then avaibale as well bookek bike photos are    *
 * shown the difference is that if we are not loggedin then we cannot proceed forward                           *
 * If logged in then we can book a bike                                                                         *
 * By clicking that book button we send our userid,start date and end date it will upadted to databse.
 *                                                                                                              *
 ****************************************************************************************************************/
	if(loggedin())
	{
			
		$GLOBALS['firstname'] = getuserfield('username');
		$GLOBALS['surname'] = getuserfield('surname');
		echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/> userid is '. $userid;
		echo '<a href="logout.php">Log Out</a>';

		displayImageWithButton();
		displayImageWithoutButton();

	}
	else{
		echo "Please login first for booking... To proceed forward.";
		echo "";
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
			//@$items[$i] = $row['image_id'];
			echo "</form>";
			//@$i++;
			//displayImageId($image_id);
		}
		mysqli_close($con);
	}

/***************************************************************************************************************
 * this function is used to update the bikes table when user is valid and book a bike 
****************************************************************************************************************/
echo "User id of that person is : ".$userid;
	function functionName($x,$startdate,$enddate,$user_id )
	{	
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
//		echo "Bike id is : $x";
		$startdate = $_REQUEST['Start_trip'];
		$enddate = $_REQUEST['end_trip'];
//		$startdate =  "16 September 2017 05:25 am";
		$resultstart = DateTime::createFromFormat('d M Y  h:i A', $startdate);
		$start = $resultstart->format('Y-m-d H:i:s');
		$resultend = DateTime::createFromFormat('d M Y - h:i A', $enddate);
		$end = $resultend->format('Y-m-d H:i:s');
		echo $sql = " UPDATE bikes SET user_id = '$user_id' ,start_date = '$start',end_date='$end'  WHERE bike_id= '$x' ";
		
	}
?>