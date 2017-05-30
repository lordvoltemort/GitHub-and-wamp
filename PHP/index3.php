<?php
	require 'SQLConnect.inc.php';
	echo "Page is successfully connect <br>" ;

	$query = "select * from food order by id desc ";
	//$query_run = mysql_query($query);

	if ($query_run = mysql_query($query)) {
		echo "Query success";
		while ($query_row = mysql_fetch_assoc($query_run)) {
			$food = $query_row['food'];
			$calories = $query_row['calories'];

			echo $food .' has '. $calories.'calories <br>';
		}
	}
	else
	{
		echo "Query failed.";
	}

?>