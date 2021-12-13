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
		<link rel="stylesheet" href="css/bonus.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

		<div class="wrapper">
			<div class="coffee">
				<h1>Kaffe Klippekort</h1>
				<div class="coffee-wrap">
					<div class="coffee-bought"></div>
					<div class="coffee-bought"></div>
					<div class="coffee-bought"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
					<div class="coffee-missing"></div>
				</div>
			</div>
			<section class="bonusses">
				<h1>Kuponer</h1>
				<article class="bonus">
					<div class="thumb"><img src="img/rawbite.png" alt="" /></div>
					<p>
						Du har optjent en <br />
						________
					</p>
				</article>
				<article class="bonus">
					<div class="thumb"><img src="img/cappucino.png" alt="" /></div>
					<p>
						Du har optjent en <br />
						________
					</p>
				</article>
			</section>
		</div>

		<a href="profil.php" id="tilbage">Tilbage</a>

		
		<?php 
		include "php/footer.php";

		?>
		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
