<?php
	$mysqlHost = 'localhost';
	$mysqlUser = 'root';
	$mysqlPassword = '';
	$conn_error = 'could not connect!!!';
	$mysql_db = 'mysql'; 	

	

	if (!@mysql_connect($mysqlHost,$mysqlUser,$mysqlPassword) || !mysql_select_db($mysql_db) ) {

		die($conn_error  );
	}else

	 
	echo "connected";
?>