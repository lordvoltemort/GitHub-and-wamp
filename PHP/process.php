<?php
	require 'SQLConnect.inc.php';
	//create a variable
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];


	//execute the query
	$sysql = mysql_query($connect,'select * from sign_up');
	
	echo "$sysql";	
?>