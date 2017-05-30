<?php 
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($username) && !empty($password))
	{
		$password_hash = md5($password);
		$query = "SELECT id FROM sign_up WHERE username='".mysqli_real_escape_string($mysql_connect, $username)."' AND password='".mysqli_real_escape_string($mysql_connect, $password)."'";
		if($query_run = mysqli_query($mysql_connect, $query))
		{
			$query_run = mysqli_query($mysql_connect, $query);
			
			$query_num_rows = mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'Invalid username/password.';
			}
			else if($query_num_rows==1)
			{
				$query_row = mysqli_fetch_assoc($query_run);
				$user_id = $query_row['id'];
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		}
	}
	else
	{
		echo 'You must enter a username and password.';
	}
}
?>

<!--
<form action="<?php echo $current_file; ?>" method="POST">
	Username: <input type="text" name="username" maxlength="20"><br/>
	Password: <input type="password" name="password" maxlength="20"><br/>
	<input type="submit" value="Log In">
</form>
-->



<body>
<link rel="stylesheet" type="text/css" href="w3.css">
<div class="w3-container">
		<button onclick="document.getElementById('id01').style.display='block' " class="w3-button w3-green w3-large" >Login</button>

	<div id="id01" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: 600px">
		<div class="w3-center"><br>
		<span onclick="document.getElementById('id01').style.display = 'none' " class="   w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
			<img src="flat_heros_02.png" alt="Avtar" style="width: 30%" class="w3-circle w3-margin-top">
		</div>
			<form class="w3-container" action="<?php echo $current_file; ?>" method="POST">
				<div class="w3-section" >
				<label><b>Username</b></label>
				<input type="text" name="username" class="w3-input w3-border w3-margin-bottom" placeholder="Enter username" > 
				<label><b>Password</b></label>
	          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" >
	          
	          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
	          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
	        	</div>
      		</form>
				
				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
				<span class="w3-right w3-padding w3-hide-small">Forgot<a href="#">Password?</a></span>
				</div>

			</div>
		</div>
	</div>
</div>
</body>



