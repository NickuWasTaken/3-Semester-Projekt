<?php
session_start();
$footerID = 3;

include 'php/functions.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$id = $_GET['id'];
$video = getVideo($id);
$data = mysqli_fetch_assoc($video)
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
		<link rel="stylesheet" href="css/video.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

		<video controls width="100%" height="305">
        <source src="media/<?php echo $data['VideoURL']; ?>"
            type="video/mp4">
        </video>
		<section class="video-wrap">
        <h2 class="wall"><?php echo $data['WallName'] . " - " . $data['name'] ; ?></h2>
        <h1 class="titel"><?php echo $data['Name']; ?></h1>
        <p><?php echo $data['Description']; ?></p>
        </section>

        <a id="tilbage" onclick="javascript:history.back()">Tilbage</a>

		<?php 
		include "php/footer.php";
		?>
		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
