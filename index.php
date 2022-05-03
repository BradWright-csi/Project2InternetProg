<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home | Preston Custom Designes</title>
  <!-- Bootstrap CSS -->
  <link rel="icon" type="image/png" href="./img/weblogo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    hr.style1 {
      background-color: green;
      color: seagreen;
    }

    p {
      color: cadetblue;
      font-family: courier;
      font-size: 250%;
    }

    img {
      vertical-align: middle;
    }

    h1 {
      text-align: center;
      color: blueviolet;
      font-family: courier;
      font-size: 500%;

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
  <div class="row">
    <div class="col">
      <h1>Preston Custom Designs</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <img src="./img/family.jpg" alt="Family" style="width:300px;height:400px;" class="offset-4 img-responsive">
    </div>
    <div class="col-5">
      <p class="offset-4">Preston Custom Designes is a family buisness run by father and son.
        We specialize in coustom wood and glass etching.</p>
    </div>
    </div>
    <div class="row">
      <div class="col-10 offset-4">

    <?php

        require_once 'pageOption.php';

        footer();
  
    ?>
  </div>
    </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>