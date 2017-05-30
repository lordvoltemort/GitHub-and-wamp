<!DOCTYPE html>
<html>
<head>
	<title>Simple sign up </title>
</head>
<body>
	<form method="POST" action="">
		Username:<br>
		<input type="text" name="username" ><br><br>
		Password:<br>
		<input type="password" name="password"><br><br>
		Email:<br>
		<input type="text" name="email"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
	require 'database.php';

	// create a variable
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
 
//Execute the query
 
	mysqli_query($connect,"INSERT INTO Sign_up(username,password,email)
				VALUES('$username','$password','$email')");

	print_r($_POST);

?>
