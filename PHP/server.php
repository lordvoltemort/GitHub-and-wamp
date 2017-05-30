<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$myssql_db = 'testing';
	
	@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || die('could not connect .');
	mysql_select_db( $myssql_db ) or die('some problem occur');


	echo "connected";

?>