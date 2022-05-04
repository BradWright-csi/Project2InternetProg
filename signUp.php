<?php
session_start();
if (isset($_SESSION["name"]))
	die("You have to be logged out to view this page");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./img/weblogo.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Sign Up! | Preston Custom Designes</title>

	<style type="text/css">
		hr.style1 {
			background-color: green;
			color: seagreen;
		}
	</style>
</head>

<body>

	<?php


	require_once 'pageOption.php';

	$pageTitle = "Sign Up";
	$logo = "./img/Picture1.png";
	navBar($pageTitle, $logo);

	?>

	<hr class="style1">
	<h2 style="text-align: center;">Sign Up</h2>

	<div class=container>
		<form action="./signupHandle.php" method="POST" onsubmit="return validateSignup(this)">
			<label for="name">Name:</label>
			<br>
			<input type="text" id="name" name="name">
			<br>
			<div id="namemsg"></div>
			<label for="email">Email:</label>
			<br>
			<input type="text" id="email" name="email">
			<br>
			<div id="emailmsg"></div>
			<label for="pwd">Password:</label>
			<br>
			<input type="password" id="pwd" name="pwd">
			<br>
			<div id="pwdmsg"></div>
			<br>
			<input type="submit" value="Sign Up">
		</form>
		<br> <br>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="./js/validatequote.js"></script>
	</div>
</body>

</html>