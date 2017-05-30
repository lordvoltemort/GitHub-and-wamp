<!DOCTYPE html>
<html>
<head>
	<title>Simple Form</title>
	<link rel="stylesheet" type="text/css" href="SignUp.css">
</head>
<body>
<div class="SignUp">
	<form action="" method="POST">
		<b>Name</b><input type="text" name="username" value="username"><br><br>
		<b>Password</b><input type="Password" name="password" ><br><br>
		<input type="submit" name="submit">
	</form>
</div>

<?php

	if (isset($_POST['username']) &&isset($_POST['password']) ) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
	if (!empty($username) && !empty($password)) {
		echo "ok";
	}
	else
	{
		echo "some of the field is missings.";
	}
?>

</body>
</html>
