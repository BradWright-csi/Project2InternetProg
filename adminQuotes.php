<?php
session_start();
if (!isset($_SESSION["admin"]))
    die("You have to login as an admin to view this page");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/weblogo.png">
    <title>Quote Manager | Preston Custom Designs</title>

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

    $pageTitle = "Status Manager";
    $logo = "./img/Picture1.png";
    navBar($pageTitle, $logo);

    echo ("<hr class=\"style1\">");

    require_once 'connection.php';
    $conn = connect_db();

    $query = "SELECT * FROM orders";
    $result = $conn->query($query);
    if (!$result)
        die("Query error!" . $query);

    $rows = $result->num_rows;

    echo ("<h2 style=\"text-align: center;\">Quote Manager</h2>");
    echo ("<div class=\"container\">");

    for ($i = 0; $i < $rows; $i++) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $type = $row["type"];
        $desc = $row["description"];
        $status = $row["status"];
        $quantity = $row["quantity"];

        echo <<< EOT
            <div class="row mt-4">
                <div class="col-md-3">
                    <h3>$type</h3>
                </div>
                <div class="col-md-3">
                    <h3>Quantity: $quantity</h3>
                </div>
                <div class="col-sm-2">
                    <label for="price" style="width: 50px;">$</label>
                    <input type="text" id="price" name="price">
                </div>
                <div class="col-md-4">
                    <h3><a href="#">Submit</a></h3><br>
                </div>
                <div class="col-lg-auto">
                    <h3>$desc</h3>
                </div>
            </div>
        EOT;

        echo ("<hr style=\"background-color: green;color: seagreen;\">");
    }
    echo ("</div>");
    $conn->close();
    ?>

    </div>
</body>

</html>