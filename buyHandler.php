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

    $qid = $_POST['buy'];
    $quote = $conn->query("SELECT * FROM quotes WHERE quoteID = \"$qid\"");
    $row = $quote->fetch_array(MYSQLI_ASSOC);


    $t = $row["type"];
    $p = $row["price"];
    $d = $row["description"];
    $q = $row["quantity"];
    $cid = $row["customerID"];


    $placeorderQuery = "INSERT INTO orders (type, price, description, status, customerID, quantity) VALUES (\"$t\", \"$p\", \"$d\", '', \"$cid\", \"$q\")";
    $removequoteQuery = "DELETE FROM quotes WHERE quoteID = \"$qid\"";

    $result = $conn->query($placeorderQuery);
    if (!$result) {
        die("Query Error on order submission!");
    }

    $result = $conn->query($removequoteQuery);
    if (!$result) {
        die("Query Error on order submission!");
    }
    echo ("<div class=\"container\">");
    echo "<h2>Order has been placed!</h2>";
    echo "<h3><a href=\"./myOrders.php\">View Order Summary</a></h3>";
    echo "<h3><a href=\"./myQuotes.php\">Return to Quotes</a></h3>";
    echo ("</div>");

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