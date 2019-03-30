<!DOCTYPE HTML>
<html>
	<head>
		<title>Notifications</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
<script>
if(window.Notification && Notification.permission !== "denied") {
	Notification.requestPermission(function(status) {  // status is "granted", if accepted by user
		var n = new Notification('New Salon Establishment', { 
			body: 'Wanjaa just set up a new salon on Ole Sangale Road, Nairobi. Check it out today!',
			icon: '/path/to/icon.png'
		}); 
	});
}
</script>
</html>