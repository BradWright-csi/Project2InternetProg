<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <?php

    require_once 'pageOption.php';

    $pageTitle = "Login";
    $logo = "./img/Picture1.png";
    navBar($pageTitle, $logo);





    require_once 'connection.php';
    $conn = connect_db();

    $email = $_POST["email"];
    $password = $_POST["pwd"];

    $query = "SELECT * FROM users WHERE email = \"$email\" AND password = SHA1(\"$password\")";
    $result = $conn->query($query);
    if (!$result) {
      die("Query Error on logIn!");
    }
    $rows = $result->num_rows;
    if ($rows > 0) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $userName = $row["name"];
      $_SESSION['name'] = $userName;
      echo "<h2>Welcome back, $userName</h2>";
    } else {
      echo "<h2>Login Failed, Try again.</h2>";
    }
    $conn->close();

    echo "</div>";
    footer();
    ?>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>