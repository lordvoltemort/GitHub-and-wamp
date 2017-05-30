<?php
	$xml = simplexml_load_file('example.xml');
 	foreach ($xml->producer as $producer) {
 		echo $producer->name. is .$producer->age.'<br>';
 	}

//	echo $xml->producer[1]->name. is .$xml->producer[1]->age;
?> 