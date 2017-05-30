<!DOCTYPE html>
<html>
<head>
	<title>Login using php</title>
</head>
<body>
<form action="GET" action="login.php" >
	<input type="username" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="login">
</form>

</body>
</html>


<?php
/*
	require 'database.php';
		
	$username=$_GET['username'];
	$password=$_GET['password'];

	if(isset($_GET["username"], $_GET["password"])) 
    {     
    	print_r($_GET);
    	echo "You are in if condition";

        $result1 = mysql_query($connect,"SELECT username, password FROM sign_up WHERE username = '".$username."' AND  password = '".$password."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 

            echo "You are logged_in";
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}*/




$db=mysqli_connect("localhost","Rahul","testing","Koqa313*@3");
$username=$_POST['username'];
$password=$_POST['password']; 
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'"; 
$query=mysqli_query($db,$sql);
if($query){
	echo "successful";
	//successful login 
} else{
	// unsuccessful login
	echo "unsuccessful login";
} 


?>
