<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body style="background-color: #9999FF;">
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($db,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($db,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($db,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
        if($rows==1){
			  $_SESSION['username']=$row['username'];
               header ('location: dashboard_hairdresser.php'); 
		    
		}
		else{
				echo "<center><br><br<br><br><br><style>body {background-color: white;}</style><div style='width:50% background-color: white;'><h4 style='color: white;'>Username or password is incorrect.</h4><br/><a href='login.php'>Try Again</a></div></center>";
				}
    }else{
?>
<center>
<div class="form" style="margin-top: 100px; border: 2px solid #black; background-color: white; width: 30%; padding-bottom: 10px; border-radius: 10px;">
<br>
<h1 style="font-size: 32px; color: #9999FF; font-family: 'Pacifico', cursive;">Log In</h1><br>

<form action="" method="post" name="login">
<input style="width: 62%;" type="text" name="username" placeholder="Username" required /><br>
<input style="width: 62%;" type="password" name="password" placeholder="Password" required /><br>
<input style="background-color: #9999FF; color: white;" name="submit" type="submit" value="Login" /><br><br>
<p>Not registered yet? <a href="registration.php"> Register</a><br>
Back to <a href="home.php">homepage?</a></p>
</form>
</div>
</center>
	<?php } ?>


</body>
</html>
