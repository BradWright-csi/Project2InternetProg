<!-- 
  Sets user's status to admin and allows them to access certain pages only admins can access
-->

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

    <title>Admin Login</title>
</head>

<body>
    <div class="container">
        <?php
        require_once 'pageOption.php';

        $pageTitle = "ADMIN LOGIN";
        $logo = "./img/Picture1.png";

        require_once 'connection.php';
        $conn = connect_db();

        // get input from form
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        $query = "SELECT * FROM admin WHERE email=\"$email\" AND password=SHA1(\"$pwd\");";

        $result = $conn->query($query);

        if (!$result) {
            die("Query error on login.");
        }

        $rows = $result->num_rows;
        if ($rows > 0) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $name = $row["name"];

            $_SESSION['name'] = $name;
            $_SESSION['admin'] = $name;
            navBar($pageTitle, $logo);
            header('Location: ./adminQuotes.php');
        } else {
            echo "Incorrect email or password.";
        }

        $conn->close();

        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>

</html>