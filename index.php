<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style>a:hover{color: white;}button:hover{background-color:#dfdfdf;}</style>
</head>
<body style="background-color: #dfdfdf;">
<center>
<div class="form" style="margin-top:120px; width:40%; border: 2px solid #black; background-color: white; padding-bottom: 4px; border-radius: 10px;">
<a href="logout.php" style="float: right; margin-right: 30px; background-color: #dfdfdf; padding:10px; text-decoration: none;">Logout</a><br><br>
<h2 style="font-family: 'Pacifico', cursive; padding-top: 23px; font-size: 32px; color: #9999FF;">Welcome Manager!</h2>
<p>This is a secure area.<br><br>
<button style="background-color:#dfdfdf;"><a href="dashboard.php" style="text-decoration: none; text-transform: capitalize; font-weight: 400; font-size: 15px;font-family: 'Poppins', sans-serif;">Dashboard</a></p></button>

</div>
</center>
</body>
</html>
