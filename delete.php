<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM contact WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: view.php");
?>