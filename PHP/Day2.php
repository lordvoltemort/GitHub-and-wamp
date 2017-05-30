<!DOCTYPE html>
<html>
<head>
	Using some variable<br>
	<title>Day 2</title>
</head>
<body>
<?php 
	$name = 'Rahul';
	$age = 20;
	if (strtolower($name) ==='rahul')  {
		if ($age >= 20) {
			echo 'You are over 20.';
			if (1===1) {
				echo 'Yes ,1 is equal to 1.';
			}
		}
		else
		{
			echo "You are not Rahul.";
		}
	}
?>
</body>
</html>