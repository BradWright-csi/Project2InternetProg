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

    $pageTitle = "My Quote";
    $logo = "./img/Picture1.png";
    navBar($pageTitle, $logo);
    echo ("<hr class=\"style1\">");

    require_once 'connection.php';
    $conn = connect_db();

    $email = $_SESSION['name'];

    $custID = $conn->query("SELECT userID FROM users WHERE email = \"$email\"");
    $row = $custID->fetch_array(MYSQLI_ASSOC);

    $custID = $row["userID"];

    $query = "SELECT * FROM quotes WHERE customerID = \"$custID\"";
    $result = $conn->query($query);
    if (!$result)
        die("Query error!" . $query);

    $rows = $result->num_rows;
    echo ("<h2 style=\"text-align: center;\">My Quotes</h2>");
    echo ("<div class=\"container\">");

    for ($i = 0; $i < $rows; $i++) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $type = $row["type"];
        $price = $row["price"];
        $desc = $row["description"];
        $quantity = $row["quantity"];
        $quoteID = $row["quoteID"];
        

        echo <<< EOT
            <div class="row mt-4">
                <div class="col-md-3">
                    <h3>$type</h3>
                </div>
                <div class="col-sm-2">
                    <h3>Quantity: $quantity</h3>
                </div>
                <div class="col-sm-2">
                    <h3>Price: $$price</h3>
                </div>
                <div class="col-sm-2">
                    <form action="./buyHandler.php" method="POST">
                        <input type="hidden" id="buy" name="buy" value="$quoteID">
                        <input type="submit" value="Buy">
                    </form>
                </div>
                <div class="col-sm-2">
                     <form action="./cancelHandler.php" method="POST">
                        <input type="hidden" id="cancel" name="cancel" value="$quoteID">
                        <input type="submit" value="Cancel">
                    </form>
                </div>
                <div class="col-lg-auto">
                    <br><h3>$desc</h3>
                </div>
            </div>
            <br>
        EOT;

        echo ("<hr style=\"background-color: green;color: seagreen;\">");
    }
    echo ("</div>");
    $conn->close();

    
    ?>


    </div>
</body>

</html>