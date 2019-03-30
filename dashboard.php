<?php
require('db.php');
include("auth.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style>.logout:hover{color: white;}</style>
</head>
<body style="background-color: #dfdfdf;">
<center>
<div style="margin-top:120px; width:40%; border: 2px solid #black; background-color: white; padding-bottom: 4px; border-radius: 10px;">
<a href="logout.php" class="logout" style="float: right; margin-right: 30px; text-decoration: none; background-color: #dfdfdf; padding:10px;">Logout</a><br><br>
<p style="text-transform: capitalize; font-family: 'Pacifico', cursive; font-size: 32px;"><?php echo $_SESSION['username']; ?></p>

<p><button><a style="text-decoration: none;text-transform: capitalize; font-family: 'Poppins', sans-serif; font-size: 15px;" href="index.php">Home</a></button><br><br>
<button><a style="text-decoration: none;text-transform: capitalize;font-family: 'Poppins', sans-serif;font-size: 15px;" href="notifications.php">Send Notifications</a></button><br><br>
<button><a style="text-decoration: none;text-transform: capitalize;font-family: 'Poppins', sans-serif;font-size: 15px;" href="view.php">View Comments</a></button><br><br>

</div>
</center>
</body>
</html>
