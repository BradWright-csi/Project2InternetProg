<?php
session_start();
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
</head>

<body>
  <div class=container>
    <?php

    require_once 'pageOption.php';

    $pageTitle = "Login";
    $logo = "./img/Picture1.png";



    require_once 'connection.php';
    $connect = connect_db();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];





    $query = "INSERT INTO users (userid, name, password, email) VALUES (NULL, \"$name\", SHA1(\"$pwd\"), \"$email\")";
    $result = $connect->query($query);
    if (!$result) {
      die("Failed");
    } else {
      $query = "SELECT * FROM users WHERE email = \"$email\"";
      $result = $connect->query($query);
      if (!$result) {
        die("Failed");
      } else {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $username = $row["name"];
        $_SESSION['name'] = $username;
        navBar($pageTitle, $logo);
        echo "Account created! Welcome, $username!";
      }
    }

    $connect->close();



    ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>