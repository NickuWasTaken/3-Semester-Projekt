<!doctype html>
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
		<link rel="stylesheet" href="css/rediger.css" />
		<title>Hello World</title>
	</head>

<body>


<?php 
		include "php/header.php";
		?>


<div class="profil">
    <div> 
        <img id='storprofilepic' height="350" src="./img/bouldersstorprofil.png">
    </div>
    <div>
        <p id="skiftbillede">
            Skift Billede
        </p>
        <input type="text" id="skiftbilledeinput">
    </div>
</div>


<p>
    Navn:
</p>

<input type="text" class="input">

<p>
    Foretrukket sværhedsgrad:
</p>

<input type="text" class="input">

<p>
    E-mail:
</p>

<input type="text" class="input">

<div class="knapper">
    <div>
        <button type="button" id="tilbage"">Tilbage</button>
    </div>
    <div>
        <button type="button" id="gemændringer">Gem Ændringer</button>
    </div>

</div>




<?php 
		include "php/footer.php";

		?>


</body>
</html>