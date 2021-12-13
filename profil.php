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
		<link rel="stylesheet" href="css/profil.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

		<div class="profil">
			<div class="summary">
				<img src="img/Cassy.png" alt="" />
				<p>Karsten Christian</p>
				<div>
					<a href="">
						50
						<p>Ruter</p>
					</a>
					<a href="">
						4
						<p>Badges</p>
					</a>
				</div>
			</div>
			<a href="bonus.php" class="bonus">Optjente bonuser: 1</a>
			<div class="badges">
				<div class="badge-wrapper">
					<img src="img/badge-1.png" alt="" />
					<img src="img/badge-2.png" alt="" />
					<img src="img/badge-3.png" alt="" />
				</div>
				<a href="badges.html">Se alle badges</a>
			</div>
			<div class="profil-links">
				<a href="rediger.php" class="rediger">Rediger profil</a>
				<a href="skift-kode.php" class="kodeord">Skift kodeord</a>
				<a href="index.php" class="log-ud">Log ud</a>
			</div>
		</div>

		
		<?php 
		include "php/footer.php";

		?>
		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
