<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
		<center>
		<img src="img/mrsm.png" height="120" width="175" alt="mrsm">
		</center>
    <h3>E-Wallet MRSM Admin Login Page</h3>
	
    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
		</div>

  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT adminID FROM admins WHERE Ad_user ='$username' and Ad_pass ='$password'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['userID']=$row['userID'];
					header('location:admintest.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?> 
</div>

</body>
</html>