<?php
	$mysql_host = 'localhost';
	$mysql_user = 'Rahul';
	$mysql_pass = 'Koqa313*@3';
	$myssql_db = 'testing';
	
	
	if (@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || ) {
		# code...
	}
	 || die('could not connect .');
	mysql_select_db( $myssql_db ) or die('some problem occur');


	echo "connected";

?>