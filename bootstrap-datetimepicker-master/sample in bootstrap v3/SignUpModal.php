<?php 
require 'core.inc.php';
if(!loggedin())
{
  if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password_confirm'])&&isset($_POST['firstname'])&&isset($_POST['surname']))
  {
    $email = trim($_POST['email']);
    
    $password = trim($_POST['password']);
    $password_again = trim($_POST['password_confirm']);
    
    $firstname = trim($_POST['firstname']);
    $surname = trim($_POST['surname']);
    if(!empty($email)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname))
    {
      if(strlen($email)>30||strlen($firstname)>30||strlen($surname)>30)
      {
        echo 'Please adhere to maxlength of fields.';
      }
      else
      {
        if($password!=$password_again)
        {
          echo 'Passwords do not match.';
        }
        else
        {
          $password_hash = md5($password);
          
          $query = "SELECT username FROM users WHERE username='".mysqli_real_escape_string($mysql_connect, $email)."'";
          $query_run = mysqli_query($mysql_connect, $query);
          $query_num_rows = mysqli_num_rows($query_run);
          if($query_num_rows>=1)
          {
            echo 'The email '.$email.' already exists.';
          }
          else
          {
            $query = "INSERT INTO users VALUES (NULL,'".mysqli_real_escape_string($mysql_connect, $email)."','".mysqli_real_escape_string($mysql_connect, $password_hash)."','".mysqli_real_escape_string($mysql_connect, $firstname)."','".mysqli_real_escape_string($mysql_connect, $surname)."')";
            if($query_run = mysqli_query($mysql_connect, $query))
            {
              header('Location: register_success.php');
            }
            else
            {
              echo 'Sorry, we couldn\'t register you at this time. Try again later.';
            }
          }
        }
      }
    }
    else
    {
      echo 'All fields are required.';
    }
  }
?>

<link rel="stylesheet" type="text/css" href="signUpModal.css">
<body>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id02" class="modalSignUp">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-contentSignUp animate" action="SignUpModal.php" method="POST">
    <div class="containerSignUp">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required value="<?php if(isset($email)) { echo $email; } ?>">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password_confirm" required>

      <label><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="firstname" required value="<?php if(isset($firstname)) { echo $firstname; } ?>">

      <label><b>Last Name</b></label>
      <input type="text" placeholder="Last name" name="surname" required value="<?php if(isset($surname)) { echo $surname; } ?>">

      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnSignUp">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>



<?php
}
else if(loggedin())
{
  echo 'You\'re already registered and logged in.';
}
?>