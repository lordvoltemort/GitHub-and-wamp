
<?php 
		displayimage();
		function displayimage(){
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry = "select * from images ";
		$result = mysqli_query($con,$qry);
		while ($row = mysqli_fetch_array($result)) {
			echo '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row[2]. ' "  >';
			
			//echo ' <input type ="button" value = "Click to book" > ';
			echo '  ';
		}
		mysqli_close($con);
	}

?>