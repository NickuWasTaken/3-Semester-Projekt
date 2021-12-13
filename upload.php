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
		<link rel="stylesheet" href="css/upload.css" />
		<title>Hello World</title>
	</head>
	<body>
	<?php 
		include "php/header.php";
		?>

		<form action="php/file-upload.php" method="POST" class="upload-wrap" enctype="multipart/form-data">

        <div class="file-center"><input type="file" name="file"></div>


        <div class="form-flex">
        <div class="label-group">
            <Label>Rute:</Label>
            <select name="difficulty">
            <?php while($difficulty = mysqli_fetch_assoc($allDifficulties)){
                echo '<option value="'.$difficulty['DifficultyID'].'">'.$difficulty['DifficultyName'].'</option>';
            } ?>    
            </select>
        </div>

        <div class="label-group-2">
            <Label>Nr:</Label>
            <select name="route">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>   
            </select>
        </div>
    </div>

        <div class="label-group">
            <Label>Væg:</Label>
            <select name="wall">
            <?php while($wall = mysqli_fetch_assoc($allWalls)){
                echo '<option value="'.$wall['WallID'].'">'.$wall['WallName'].'</option>';
            } ?>    
            </select>
        </div>

        <div class="label-group-3">
            <Label>Titel:</Label>
            <input type="text" name="title">
        </div>

        <div class="label-group-3">
            <Label>Beskrivelse:</Label>
            <textarea name="desc" class="desc"></textarea>
        </div>

        <input type="submit" id="upload" name="upload" value="Upload">
</form>

        <a id="tilbage" onclick="javascript:history.back()">Tilbage</a>

		<?php 
		include "php/footer.php";

		?>
	</body>
</html>
