<?php
require('db.php');
//include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style>.logout:hover{color: white;}</style>
</head>
<body>
<br><br>
<center>
<div class="form" style="width: 70%;">
<p><button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="index.php">Home</a></button> | <button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="notifications.php">Send Notifications</a></button> | <button><a style="text-decoration: none;font-family: 'Poppins', sans-serif;font-size: 15px;text-transform:capitalize;" href="logout.php">Logout</a></button></p>
<h2 style="text-transform: capitalize; font-family: 'Pacifico', cursive; font-size: 32px;">View Records</h2>
<table width="100%" style="border-collapse:collapse; border: 3px solid #F7F7F7;">
<thead>
<tr>
<th align="center"><strong>C.No</strong></th>
<th align="center"><strong>Name</strong></th>
<th align="center"><strong>Email</strong></th>
<th align="center"><strong>Message</strong></th>
<th align="center"><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from contact ORDER BY id desc;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td ><?php echo $count; ?></td>
<td ><?php echo $row["name"]; ?></td>
<td ><?php echo $row["email"]; ?></td>
<td ><?php echo $row["message"]; ?></td>
<td ><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</center>
</body>
</html>
