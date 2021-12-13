<!DOCTYPE html>
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
		<link rel="stylesheet" href="css/nyheder.css" />
		<title>Hello World</title>
	</head>

	<body>
    <?php 
		include "php/header.php";
		?>

		<img id="mainpic" src="./img/boulder-nyhed1.png" alt="Girl climbing" />

		<p class="nyheder">Nyheder</p>

		<h2 class="titel" style="text-decoration: underline">
			Nye ruter på Lynet!
		</h2>

		<p>
			På ruten O4, er det vigtigt at have en forståelse over hvordan du skal
			gribbe fast på væggen, og hvordan du skal fordele din vægt Hvis du ikke
			har en god nok forståelse, vil denne rute være meget besværlig at
			gennemføre.<br />
			<br />
			Denne video skal hjælpe dig med at gennemføre ruten, ved at vise hvordan
			du skal gribbe fat nogle steder, og hvordan du skal fordele din vægt.
		</p>

		<a id="tilbage" onclick="javascript:history.back()">Tilbage</a>

		<?php 
		include "php/footer.php";
		?>
	</body>
</html>
