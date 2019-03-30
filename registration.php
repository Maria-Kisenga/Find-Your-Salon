<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style>
input[type="number"]:focus{border-color: #8a4680;box-shadow: 0 0 0 2px #8a4680;}
</style>
</head>
<body style="background-color: #9999FF;">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		
		$role="hairdresser";
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($db,$username); //escapes special characters in a string
		
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($db,$email);
		
		$phone = stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($db,$phone);
		
		$salon = stripslashes($_REQUEST['salon']);
		$salon = mysqli_real_escape_string($db,$salon);
		
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($db,$password);

		$trn_date = date("Y-m-d H:i:s");
		
        $query = "INSERT into `users` (username, password, email, phone, role, salon, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$phone', '$role', '$salon', '$trn_date')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.<br>Please wait while we create a page for you.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<center>
<div class="form" style="margin-top: 50px; border: 2px solid #black; background-color: white; width: 30%; padding-bottom: 4px; border-radius: 10px;">
<h1 style="font-family: 'Pacifico', cursive; padding-top: 23px; font-size: 32px; color: #9999FF;">Registration</h1><br>
<form name="registration" action="" method="post">
<input  style="width: 70%;" type="text" name="username" placeholder="Username" required /><br>
<input  style="width: 70%;" type="email" name="email" placeholder="Email" required /><br>
<input  style="width: 70%; -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance:none;border-radius: 2px;border: none;border: solid 1px;color: inherit;display: block;outline: 0;padding: 0 1rem;text-decoration: none;height: 2.75rem;background: rgba(144, 144, 144, 0.075);border-color: rgba(144, 144, 144, 0.25);" type="number" name="phone" placeholder="Phone Number" required /><br>
<input  style="width: 70%; text-transform: capitalize;" type="text" name="salon" placeholder="Salon" required /><br>
<input  style="width: 70%;" type="password" name="password" placeholder="Password" required /><br>
<input  style="background-color: #9999FF; color: white;" type="submit" name="submit" value="Register" />
<br><br>
<p>Already have an account? <a href="login.php"> Login</a><br>
Back to<a href="home.php"> homepage?</a></p>
</form>
<?php } ?>
</div>
</center>
</body>
</html>
