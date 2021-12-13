<?php
session_start();
$footerID = 1;

include 'php/functions.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$allNews = getAllNews();
$allEvents = getAllEvents();

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
		<link rel="stylesheet" href="css/home.css" />
		<title>Hello World</title>
	</head>
	<body>
		<?php
		include "php/header.php";
		?>

		<div class="home">
			<h1>Find Ruteløsning!</h1>
			<article class="plantegning-wrapper box-wrapper">
				<a href="browse.php">
					<span class="plantegning">
						<p>
							Tryk på plantegning for nemt <br />
							at finde løsningen til din rute!
						</p>
						<img src="img/ruteplan.png" alt="" />
					</span>
				</a>
			</article>

			<h1>Nyheder</h1>
			<?php 
			while ($news = mysqli_fetch_assoc($allNews)) {
			?>
			<article class="news">
				<a href="news.php?id=<?php echo $news['NewsID']; ?>">
					<span>
						<img src="<?php echo $news['imgURL']; ?>" alt="" class="img-block" />
						<p><?php echo $news['Title']; ?></p>
					</span>
				</a>
			</article>
			<?php } ?>
			<a href="">Se alle nyheder..</a>

			<h1>Events</h1>
			<?php 
			while ($events = mysqli_fetch_assoc($allEvents)) {
			?>
			<article class="news">
				<a href="nyheder.html">
					<span>
						<img src="<?php echo $events['imgURL']; ?>" alt="" class="img-block" />
						<p><?php echo $events['Title']; ?></p>
					</span>
				</a>
			</article>
			<?php } ?>

			<a href="">Se alle Events..</a>
		</div>

		<?php 
		include "php/footer.php";
		?>

		<script src="cordova.js"></script>
		<script src="js/index.js"></script>
	</body>
</html>
