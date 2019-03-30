<?php
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$message =$_REQUEST['message'];
$ins_query="insert into contact (`name`,`email`, `message`) values ('$name', '$email', '$message')";
mysqli_query($db,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input type="text" name="name" placeholder="Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="message" placeholder="Message" required />
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#9999FF;"><?php echo $status; ?></p>

</div>
</div>
</body>
</html>
