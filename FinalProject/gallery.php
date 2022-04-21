<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photo Gallery</title>
	<link rel="stylesheet" href="./gallery.css">
	<script src = "./js/gallery.js"></script>
</head>
<body>
<div class = container>
 <?php

    require_once 'pageOption.php';

    $pageTitle="Gallery";
    $logo="./img/Picture1.png";
    navBar($pageTitle, $logo);

 ?>
	<div class = "row">
	<div class = "col-5">
	<div id = "image">
		Hover over image to display!
	</div>
</div>

<div class="col-7">	
	<img class = "preview" alt = "" src = "./img/glass1.jpg" onmouseover = "upDate(this)" onmouseout = "unDo()">
	<img class = "preview" alt = "" src = "./img/glass2.jpg" onmouseover = "upDate(this)" onmouseout = "unDo()">
	<img class = "preview" src = "./img/glass3.jpg" alt = "" onmouseover = "upDate(this)" onmouseout = "unDo()">
	<img class = "preview" src = "./img/glass4.jpg" alt = "" onmouseover = "upDate(this)" onmouseout = "unDo()">
	<img class = "preview" src = "./img/glass5.jpg" alt = "" onmouseover = "upDate(this)" onmouseout = "unDo()">
</div>
</div>
</div>
</body>
</html>