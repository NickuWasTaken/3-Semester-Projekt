<?php 
session_start();
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="msapplication-tap-highlight" content="no" />
		<meta
			name="viewport"
			content="initial-scale=1, width=device-width, viewport-fit=cover"
		/>
		<meta name="color-scheme" content="light dark" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/master.css" />
		<link rel="stylesheet" href="css/login.css" />
		<title>Hello World</title>
	</head>
	<body>
		<div class="app">
			<img src="img/logo.png" alt="" />
			<form action="php/login-action.php" method="post" class="login-wrap">
				<div>
					<label>Brugernavn:</label> <br />
					<input type="text" name="username" />
				</div>
				<div>
					<label>Password:</label> <br />
					<input type="password" name="password" />
				</div>
				<input class="submit login-btn" type="submit" value="Login" name="login" />
			</form>
		</div>
		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
