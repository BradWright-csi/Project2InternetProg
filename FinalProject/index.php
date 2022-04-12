<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: green;
    color: seagreen;
  }
  </style>
</head>
<body>

  
  <div class="jumbotron text-center">
  <?php

    require_once 'pageOption.php';

    $pageTitle="About";
    $logo="./img/Picture1.png";
    navBar($pageTitle, $logo);

    ?>
  <h1>Preston Custom Designes</h1> 
  <p>We are a family buisness run by a father and son. We specialize in coustom wood and glass etching.</p>
  <img src="./img/hold.jpg"  alt="Family" style="width:700px;height:400px;" > 
</div>

</body>
</html>
