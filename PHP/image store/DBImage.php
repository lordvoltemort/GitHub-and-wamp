<?php
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_sockey_timeout',300);
?>


<html>
<body>
<form method="post" enctype="multipart/form-data"><br>
	<input type="file" name="image" /><br><br>
	<input type="submit" name="submit" value="upload">
</form>
<?php
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

		$con=mysqli_connect("localhost","Rahul","Koqa313*@3","testing");
		//mysqli_select_db("testing",$con);
		$qry="insert into images (name,image) values ('$name','$image')";
		
		$result = mysqli_query($qry,$con);
		if ($result == true) {

			echo "<br>Image uploaded";
		}
		else{
			echo "<br>Image not uploaded";	
		}

	}
?>


</body>
</html>