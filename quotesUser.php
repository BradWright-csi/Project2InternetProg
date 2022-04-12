<!-- 
    If user is signed in, they can see/fill out quote form
-->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes | Preston Custom Designes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <div class=container>
        <?php

        require_once 'pageOption.php';

        $pageTitle = "About";
        $logo = "./img/Picture1.png";
        navBar($pageTitle, $logo);

        ?>
        <p>* must be entered</p>
        <label for="worktype">*Type of Service:</label><br>
        <select name="product" id="product" form="services">
            <option value=""></option>
            <option value="woodwork">Woodwork</option>
            <option value="glass">Glass Etching</option>
        </select>

        <form action="./quoteHandler.php" method="POST" id="services" name="services">
            <label for="email">*Phone Number:</label><br>
            <input type="tel" id="phone" name="phone"><br>
            <label for="description">Description of work you would like preformed:</label><br>
            <textarea id="desc" name="desc" rows="4" cols="50"></textarea><br>
            <label for="picture">Select a picture for refrence:</label>
            <input type="file" id="picture" name="picture"><br>
            <div id="msg"></div>
            <input type="submit" value="Submit">
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </div>
</body>

</html>