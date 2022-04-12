<!-- 
  Allows admin, only, to view quotes and give estimated pricing from user's quotes
-->

<?php
session_start();
if (!isset($_SESSION["admin"]))
    die("You have to login as an admin to view this page");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes Manager | Preston Custom Designes</title>
</head>

<body>
    <div class="container">
        <?php

        require_once 'pageOption.php';

        $pageTitle = "Quote Manager";
        $logo = "./img/Picture1.png";
        navBar($pageTitle, $logo);

        ?>
        <div class="row mt-4">
            <div class="col-sm-2">
                <h4>Example:<br></h4> <img src="./img/glass1.jpg" class="rounded" alt="glass1.jpg" width="60%" height="70%">
            </div>
            <div class="col-md-3">
                <h3>Georgia Shot Glass - Glass Ethcing</h3>
            </div>
            <div class="col-sm-2">
                <h3>Quanity: 2</h3>
            </div>
            <div class="col-sm-2">
                <h3><a href="#">View</a></h3>
            </div>
            <div class="col-lg-auto">
                <h3>I want a shot glass with a georgia bulldogs logo with the teams name surrounding it</h3>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-2">
                <h4>Example:<br></h4> <img src="./img/glass4.jpg" class="rounded" alt="glass1.jpg" width="60%" height="70%">
            </div>
            <div class="col-md-3">
                <h3>Georgia Helmet Shot Glass - Glass Ethcing</h3>
            </div>
            <div class="col-sm-2">
                <h3>Quanity: 1</h3>
            </div>
            <div class="col-sm-2">
                <h3><a href="#">View</a></h3>
            </div>
            <div class="col-lg-auto">
                <h3>I want a shot glass with a georgia bulldogs helmet with "GO DAWGS" on top</h3>
            </div>
        </div>
    </div>
</body>

</html>