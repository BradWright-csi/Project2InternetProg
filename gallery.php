<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Photo Gallery | Preston Custom Designes</title>
	<link rel="stylesheet" href=".css/gallery.css">
	<script src="./js/gallery.js"></script>
</head>

<body>
	<div class=container>
		<?php

		require_once 'pageOption.php';

		$pageTitle = "Gallery";
		$logo = "./img/Picture1.png";
		navBar($pageTitle, $logo);

		?>

		<div id="image">
			Hover over an image below to display here.
		</div>

		<img class="preview" alt="" src="./img/glass1.jpg" onmouseover="upDate(this)" onmouseout="unDo()">
		<img class="preview" alt="" src="./img/glass2.jpg" onmouseover="upDate(this)" onmouseout="unDo()">
		<img class="preview" src="./img/glass3.jpg" alt="" onmouseover="upDate(this)" onmouseout="unDo()">
		<img class="preview" src="./img/glass4.jpg" alt="" onmouseover="upDate(this)" onmouseout="unDo()">
		<img class="preview" src="./img/glass5.jpg" alt="" onmouseover="upDate(this)" onmouseout="unDo()">
	</div>
</body>

</html>