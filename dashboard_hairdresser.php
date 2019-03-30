<?php
require('db.php');
include("appointment_auth.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Welcome Hairdresser!</p>

<p><a href="index_hairdresser.php">Home</a><p>
<?php
$username=$_SESSION['username'];

$query = "SELECT * FROM `users` WHERE username='$username'";
		$result = mysqli_query($db,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
        if($rows==1){
		             if ($row['salon']=="Unique Touch Salon & Beauty Spa")	 
			{
				$_SESSION['username']=$row['username'];
                    header ("location: dashboard_unique.php");   
			}
			else if ($row['salon']=="Angels Beauty Salon")
			{ 
                               $_SESSION['username']=$row['username'];
 
                    header ("location: dashboard_angels.php"); 
		    }
		}
		else{
?>
<p><a href="logout.php">Logout</a></p>
		<?php }?>
</div>
</body>
</html>
