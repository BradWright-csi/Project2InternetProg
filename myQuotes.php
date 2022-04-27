<!-- 
  
-->

<?php
session_start();
if (!isset($_SESSION["name"]))
    die("You have to login to view this page");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/weblogo.png">
    <title>My Quotes | Preston Custom Designes</title>

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

    $pageTitle = "Quote Manager";
    $logo = "./img/Picture1.png";
    navBar($pageTitle, $logo);

    ?>
    <hr class="style1">
    <h2 style="text-align: center;">My Quotes</h2>
    <div class=container>
        <div class="row mt-4">
            <div class="col-md-3">
                <h3>Georgia Shot Glass - Glass Ethcing</h3>
            </div>
            <div class="col-sm-2">
                <h3>Quanity: 2</h3>
            </div>
            <div class="col-sm-2">
                <h3>Price: $15</h3>
            </div>
            <div class="col-sm-2">
                <h3><a href="#">Buy</a></h3>
            </div>
            <div class="col-sm-2">
                <h3><a href="#">Cancel</a></h3>
            </div>
        </div>
        <hr class="style1">


    </div>
</body>

</html>