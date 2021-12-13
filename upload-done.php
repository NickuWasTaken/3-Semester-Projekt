<?php
session_start();
$footerID = 2;

include 'php/functions.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$allDifficulties = getAllDifficulties();
$allWalls = getAllWalls();

?>


<html>
	<head>
		<meta charset="utf-8" http-equiv="refresh" content="10;url=home.php"/>
		<meta name="format-detection" content="telephone=no" />
		<meta name="msapplication-tap-highlight" content="no" />
		<meta
			name="viewport"
			content="initial-scale=1, width=device-width, viewport-fit=cover"
		/>
		<meta name="color-scheme" content="light dark" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/master.css" />
		<link rel="stylesheet" href="css/upload.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

        <div class="done">
            <img src="img/correct.png" alt="">
            <p>Din video er uploaded og vil verificeres af vores adminstratorer!</p>
        </div>
        <a id="done-tilbage" href="home.php">Tilbage</a>

		<?php 
		include "php/footer.php";

		?>
	</body>
</html>
