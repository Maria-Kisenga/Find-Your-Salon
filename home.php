<!DOCTYPE HTML>
<html>
<head>
	<title>Find Your Salon</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<style>
body {
background: url(images/gray.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-color: #cccccc;}.icon {color: #9999FF;font-size: 28px;}.icon:hover{color: #878787;}.contact li{display: inline;margin-left: 15px;}input[type="button"]{background: #9999FF;}
input[type="button"]:hover{background: #F2F2F2;}
	</style>
</head>
<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo"><a href="home.php"><span style="color: #9999FF;">Find </span>Your Salon</a></div>
		<a href="#menu">Menu</a>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links"><br>
		    <li><a href="login.php" style="float: right;">Hairdresser Login</a></li>
			<br><br><br>
			<li><a href="home.php">Home</a></li>
			<li><a href="#one">About</a></li>
			<li><a href="map.html">Map</a></li>
			<li><a href="#two">Contact Us</a></li>
			<li><a href="dashboard_hairdresser.php">Appointment</a></li>
			
		</ul>
		<br>
		<ul class="contact">
						<li><a href="https://twitter.com/fyoursalon" class="icon fa-twitter"><span class="label">Twitter</span></a></li><!--password: find_3552016-->
						<li><a href="https://www.facebook.com/Find-Your-Salon-2011161565807346/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/fyoursalon/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="mailto:fyoursalon@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
	</nav>

	<!-- Banner -->
	<section class="banner full">
		<article>
			<img src="images/hair.jpg"  alt="Hair" />
			<div class="inner">
				<header>
					<p>Relaxing, Perming, Conditioning, Weaving</p>
					<h2>Hair</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images/pic01.jpg" alt="Face & Body Care" />
			<div class="inner">
				<header>
					<p>Massage, Facial, Make Up, Body waxing</p>
					<h2>Face & Body Care</h2>
				</header>
			</div>
		</article>
		<article>
			<img src="images/nails5.jpg" alt="Nails" />
			<div class="inner">
				<header>
					<p>Manicure, Pedicure, Polish, Nail sculpturing</p>
					<h2>Nails</h2>
				</header>
			</div>
		</article>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2">
		<div class="inner">
			<div class="grid-style">

				<div>
					<div class="box">
						<div class="image fit" style="font-size: 80px;">
							<center><i class="fa fa-thumb-tack"></i></center>
						</div>
						<div class="content">
							<header class="align-center">
								<p>Find Your Location</p>
								<h2>Salons Near You</h2>
							</header>
							<center><p>Once you search for your choice location, click go and see all the salon establishments, both new and old, near you!</p>
							<a href="map.html" class="button alt">Go To Map</a>
							</center>
						</div>
					</div>
				</div>

				<div>
					<div class="box">
						<div class="image fit" style="font-size: 80px;">
							<center><i class="fa fa-calendar"></i></center>
						</div>
						<div class="content">
							<header class="align-center">
								<p>Find Your Service</p>
								<h2>Book An Appointment</h2>
							</header>
							<center><p>Once you (the hairdresser) has agreed upon a time and date with your client, register your salon and book an appointment!</p>
							<a href="dashboard_hairdresser.php" class="button alt">Book Appointment</a>
							</center>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>Would you like to make a comment or write a review about the website?</p>
				<h2>Contact Us Below</h2><br>
			</header>
			<center>
			<form method="post" action="#two" style="width: 60%;">
			<input type="hidden" name="new" value="1" />
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="Send Message" /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>
										</div>
									</div>
			</form>
			
		<?php
require('db.php');	
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$message =$_REQUEST['message'];
$ins_query="insert into contact (`name`, `email`, `message`) values ('$name', '$email', '$message')";
mysqli_query($db,$ins_query) or die(mysql_error());
$status = "Your message has been received.";
}
		?>
		<p style="color:#9999FF; text-transform: capitalize; font-size: 16px;"><?php echo $status; ?></p>
			</center>
			
<script>	
if(window.Notification && Notification.permission !== "denied") {
	Notification.requestPermission(function(status) {  // status is "granted", if accepted by user
		var n = new Notification('Notification Subscription!', { 
			body: 'You will receive notifications about new salon establishments.',
			icon: '/path/to/icon.png'
		}); 
	});
}
</script>
		</div>
	</section>

	<!-- Three -->
	<section id="three" class="wrapper style2">
		
	</section>


	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li><a href="https://twitter.com/fyoursalon" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/Find-Your-Salon-2011161565807346/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/fyoursalon/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="mailto:fyoursalon@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</div>
		<div class="copyright">
			&copy; 2017<br>All rights reserved
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>