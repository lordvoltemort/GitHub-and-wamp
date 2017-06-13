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


<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtnSignUp {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtnSignUp,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.containerSignUp {
    padding: 16px;
}

/* The Modal (background) */
.modalSignUp {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 40px;
}

/* Modal Content/Box */
.modal-contentSignUp {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtnSignUp, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Modal Signup Form</h2>

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