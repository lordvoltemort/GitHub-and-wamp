<?php

mysql_connect("localhost","Rahul","Koqa313*@3");
mysql_select_db("testing");

if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT * FROM `images` WHERE `id`='$id'");
	while($row = mysql_fetch_assoc($query))
	{
		$imageData = $row["image"];
	}
	header("content-type: image/jpeg");
	echo $imageData;
}
else
{
	echo "Error!";
}

?>