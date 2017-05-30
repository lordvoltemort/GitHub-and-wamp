<?php
	$mysqlHost = 'localhost';
	$mysqlUser = 'Rahul';
	$mysqlPassword = 'Koqa313*@3';
	$conn_error = 'could not connect!!!';
	$mysql_db = 'testing'; 	

	

	if (!@mysql_connect($mysqlHost,$mysqlUser,$mysqlPassword) || !mysql_select_db($mysql_db) ) {

		die($conn_error  );
	}else

	 
	echo "connected";
?>