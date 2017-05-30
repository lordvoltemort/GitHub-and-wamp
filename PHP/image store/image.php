<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="image.php" method="POST" enctype="multipart/form-data" >
		<input type="file" name="image" >
		<input type="submit" name="submit" value="Upload">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			@mysql_connect("localhost","Rahul","Koqa313*@3");
			@mysql_select_db("testing");

			$imageName = @mysql_real_escape_string($_FILES["image"]["name"]);
			$imageData = @mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));

			$imageType = @mysqli_real_escape_string($_FILES["image"]["type"]);

			if(substr($imageType,0,5) == "image") {
				echo "Working";
			}
			else{
				echo "not working";
			}

		}
	?>


</body>
</html>