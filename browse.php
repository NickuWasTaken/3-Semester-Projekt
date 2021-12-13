<?php
session_start();
$footerID = 3;

include 'php/functions.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$wall = 8;
$wallName = getWallName($wall);
$data = mysqli_fetch_assoc($wallName);
$wallVideos = getWallVideos($wall);

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
		<link rel="stylesheet" href="css/browse.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

		<div class="banner">
			<img src="img/vaeg.jpg" alt="" class="banner-block" />
			<p><?php echo $data['WallName']; ?></p>
		</div>
		<div class="browse">
			<div class="green1">
				<div><h1>- Grøn Rute 1</h1></div>
				<article class="slider">
				<?php 
			while ($video = mysqli_fetch_assoc($wallVideos)) {
			?>
					<section class="video-thumb">
						<a href="video.php?id=<?php echo $video['LinkID']; ?>">
							<span>
								<img src="img/vaeg.jpg" alt="" class="img-block" />
								<div class="author">
									<img src="img/Cassy.png" alt="" />
									<p>CarstenChristian</p>
								</div>
								<p class="titel"><?php echo $video['Name']; ?></p>
								<div class="length-likes">
									<p class="length">11:48</p>
									<p class="likes"><?php echo $video['Likes']; ?> likes</p>
								</div>
							</span>
						</a>
					</section>
				<?php } ?>
				</article>
			</div>
		</div>

		<?php 
		include "php/footer.php";
		?>
		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
