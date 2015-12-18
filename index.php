<?php $ip = $_SERVER['REMOTE_ADDR']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>My IP</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="../main/img/logo.png" />
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
		window.onload = function() {

			$('#loading').fadeIn();

			setTimeout(function() {
				$("#loading").fadeOut();
				setTimeout(function() {
					$("#page").fadeIn();
				}, 500)
			}, 2000)
		}
	</script>
</head>
<body>
	<div id="loading"></div>
	<div class="container" id="page">
		<a href="/">
			<div class="home">&#xf0e7;</div>
		</a>
		<div class="center">
			<div class="ip">your ip address is <div class="ipAddress"><?php print $ip; ?></div></div>
		</div>
	</div>
</body>
</html>
