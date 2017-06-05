<?php
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_sockey_timeout',300);
	require 'core.inc.php';
?>

<html>
<body>
<script >

	function myFunction(intvalue) {
//	console.log('event',event.target.getAttribute("image_id"));
//	document.write(x);
	alert(intvalue);
	console.log(intvalue);
}
</script>

<form method="post" enctype="multipart/form-data"><br>
	<input type="file" name="image" /><br><br>
	<input type="submit" name="submit" value="upload">
</form>

</body>
</html>

<?php

//	$GLOBALS['items'] = array();
	$GLOBALS['getId'] = array();
	$GLOBALS['i'] = 0;

	if (isset($_POST['submit'])) {
		if (getimagesize($_FILES['image']['tmp_name'])== FALSE) {
			echo "Please select an image";
		}
		else{
			$image = addslashes($_FILES['image']['tmp_name']);
			$name =addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			saveimage($name,$image);

		}
	}
	
	function saveimage($name,$image)
	{	

		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry="insert into images values (NULL,'$name','$image',NULL);";
		
		$result = mysqli_query($con,$qry);
		if ($result == true) {

			echo "<br>Image uploaded";
		}
		else{
			echo "<br>Image not uploaded";	
		}

	}

	

if (loggedin()) {
		displayimage();
	}else{
		echo "Please login ";
	}

		function displayimage(){
		$con=mysqli_connect("localhost","Rahul","Koqa313*@3");
		mysqli_select_db($con,"testing");
		$qry = "SELECT * FROM bikes JOIN images ;";
		$result = mysqli_query($con,$qry);
 		
		
		
		while ($row = mysqli_fetch_array($result)) {
			echo "<form method = 'POST' action = '' >";
			$s = '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' " ';
			echo '<img height ="300" width ="300" src="data:image/jpg;base64,' .$row['image']. ' "  >';
			$GLOBALS['image_id'] = $row['image_id'];
			$s = $s +'id = ' + $row['image_id'] +' >';
//			echo $s;
			//@$items[$i] = $row['image_id'];
			echo '<br> <input type ="button" name = "getId" value = "Click to book" onclick = " myFunction(' . $s . ')">  ';
			echo "</form>";
			//@$i++;
			//displayImageId($image_id);
		}
		mysqli_close($con);
		
	}
?>