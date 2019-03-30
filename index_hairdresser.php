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
<script>
if(window.Notification && Notification.permission !== "denied") {
	Notification.requestPermission(function(status) {  // status is "granted", if accepted by user
		var n = new Notification('New Salon Establishment', { 
			body: 'New power saving hair dryers at an affordable price now sold at Dubai Beauty Centre on 2nd floor, Museum Hill Centre, Nairobi.',
			icon: '/path/to/icon.png'
		}); 
	});
}
</script>
<style>a:hover{color: white;}button:hover{background-color:#dfdfdf;}</style>
</head>
<body style="background-color: #dfdfdf;">
<center>
<div class="form" style="margin-top:120px; width:40%; border: 2px solid #black; background-color: white; padding-bottom: 4px; border-radius: 10px;">
<a href="logout.php" style="float: right; margin-right: 30px; text-decoration: none; background-color: #dfdfdf; padding:10px;font-size: 15px;">Logout</a><br><br>
<h2 style="font-family: 'Pacifico', cursive; padding-top: 23px; font-size: 32px; color: #9999FF; text-transform: capitalize;">Welcome <?php echo $_SESSION['username'];?>!</h2>
<p>This is a secure area.<br><br>
<button  style="background-color:#dfdfdf;"><a href="dashboard_hairdresser.php" style="text-decoration: none; font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;">Dashboard</a></p></button>
</div>
</center>
</body>
</html>
