<!-- 
    If user is signed in, they can see/fill out quote form
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
    <title>Quotes | Preston Custom Designes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

    $pageTitle = "About";
    $logo = "./img/Picture1.png";
    navBar($pageTitle, $logo);

    ?>
    <hr class="style1">
    <h3 style="text-align: center;">Ask For A Quote!</h3>
    <div class=container>
        <p>* must be entered</p>
        <label for="worktype">*Type of Service:</label><br>
        <select name="product" id="product" form="services">
            <option value=""></option>
            <option value="woodwork">Woodwork</option>
            <option value="glass">Glass Etching</option>
        </select>

        <form action="./quoteHandler.php" method="POST" id="services" name="services">
            <br><label for="desc">*Description of work you would like preformed:</label><br>
            <textarea id="desc" name="desc" rows="4" cols="50"></textarea><br>
            <label for="quant">*Quanity:</label><br>
            <input type="number" id="quant" name="quant"><br>
            <br>
            <div id="msg"></div>
            <input type="submit" value="Submit">
            <p><i>*Quotes may take up to 1-2 buisness days*</i></p>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div>
</body>

</html>