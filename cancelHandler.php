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
    <title>My Quotes | Preston Custom Designs</title>

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

    require_once 'connection.php';
    $conn = connect_db();

    $qid = $_POST['cancel'];

    $removequoteQuery = "DELETE FROM quotes WHERE quoteID = \"$qid\"";

    $result = $conn->query($removequoteQuery);
    if (!$result) {
        die("Query Error on quote cancelation!");
    }

    echo "<h2>Your quote has been canceled.</h2>";
    echo "<h3><a href=\"./myQuotes.php\">Return to Quotes</a></h3>";
    header('Location: ./myQuotes.php');
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