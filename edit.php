<?php
require('db.php');
//include("auth.php");

$id=$_REQUEST['id'];
$query = "SELECT * from contact where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style>input[type="submit"]:hover{background-color:#dfdfdf;}</style>
</head>
<body>
<br><br>
<center>
<div class="form" style="width:40%;">
<p><button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="index.php">Home</a></button> | <button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="notifications.php">Send Notifications</a></button> | <button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="logout.php">Logout</a></button></p>
<h1>Update Record</h1>

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$message =$_REQUEST['message'];

$update="update contact set name='".$name."', email='".$email."', message='".$message."' where id='".$id."'";
mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#9999FF;">'.$status.'</p>';
}else {
?>

<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter new name" required value="<?php echo $row['name'];?>"/></p>
<p><input type="email" name="email" placeholder="Enter new email" required value="<?php echo $row['email'];?>"/></p>
<p><input type="text" name="message" placeholder="Enter new message" required value="<?php echo $row['message'];?>"/></p>
<p><input style="background: #9999FF;" name="submit" type="submit" value="Update"/></p>
</form>
<?php } ?>

</div>
</div>
</center>
</body>
</html>
