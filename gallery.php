<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Photo Gallery | Preston Custom Designes</title>
	<link rel="stylesheet" href="./css/gallery.css">
	<link rel="icon" type="image/png" href="./img/weblogo.png">
</head>

<body>

	<?php

	require_once 'pageOption.php';

	$pageTitle = "Gallery";
	$logo = "./img/Picture1.png";
	navBar($pageTitle, $logo);

	?>
	<hr class="style1">
	<h2 style="text-align: center;">Gallery</h2>
	<div class="slideshow">
		<div class="slider">
			<div class="slides">
				<input type="radio" name="radio-btn" id="radio1" />
				<input type="radio" name="radio-btn" id="radio2" />
				<input type="radio" name="radio-btn" id="radio3" />
				<input type="radio" name="radio-btn" id="radio4" />
				<input type="radio" name="radio-btn" id="radio5" />

				<div class="slide first">
					<img src="./img/glass1.jpg" alt="Georgia Bulldogs Shot Glass" />
				</div>
				<div class="slide">
					<img src="./img/glass2.jpg" alt="Custom Shot Glass" />
				</div>
				<div class="slide">
					<img src="./img/glass3.jpg" alt="Custom Shark Shot Glass" />
				</div>
				<div class="slide">
					<img src="./img/glass4.jpg" alt="Georgia Bulldogs Shot Glass" />
				</div>
				<div class="slide">
					<img src="./img/glass5.jpg" alt="Custom Shot Glass" />
				</div>

				<div class="nav-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
					<div class="auto-btn5"></div>
				</div>

			</div>

			<script src="./js/gallery.js"></script>

			<div class="nav-manual">
				<label for="radio1" class="manual-btn" onclick="stopAuto()"></label>
				<label for="radio2" class="manual-btn" onclick="stopAuto()"></label>
				<label for="radio3" class="manual-btn" onclick="stopAuto()"></label>
				<label for="radio4" class="manual-btn" onclick="stopAuto()"></label>
				<label for="radio5" class="manual-btn" onclick="stopAuto()"></label>
			</div>
		</div>
	</div>
</body>

</html>