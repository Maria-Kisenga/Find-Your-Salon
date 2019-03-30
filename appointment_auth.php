<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: appointment_login.php");
exit(); }
?>
