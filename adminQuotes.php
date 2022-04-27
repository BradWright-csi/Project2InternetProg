<!-- 
    Allows admin to update status of products
-->

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
    <title>Status Manager | Preston Custom Designes</title>
</head>

<body>
    <div class="container">
        <?php

        require_once 'pageOption.php';

        $pageTitle = "Status Manager";
        $logo = "./img/Picture1.png";
        navBar($pageTitle, $logo);

        require_once 'connection.php';
        $conn=connect_db();

        $query="SELECT * FROM orders";
        $result=$conn->query($query);
        if(!$result) 
            die("Query error!".$query);

        $rows=$result->num_rows;

        for ($i=0; $i<$rows; $i++) {
            $row=$result->fetch_array(MYSQLI_ASSOC);
            $type=$row["type"];
            $price=$row["price"];
            $desc=$row["description"];
            $status=$row["status"];
            $img=$row["image"];

            echo<<< EOT    
            <div class="row mt-4">
               <div class="col-sm-2">
                <h4>Example:<br></h4> <img src="$img" class="rounded" alt="glass1.jpg" width="60%" height="70%">
            </div>
            <div class="col-md-3">
                <h3>$type</h3>
            </div>
            <div class="col-sm-2">
                <h3>Quanity: 2</h3>
            </div>
            <div class="col-sm-2">
                <label for="worktype">Status: $status</label>
            </div>
            <div class="col-sm-2">
                <label for="worktype">Current Status: </label>
                <select name="product" id="product" form="services">
                    <option value=""></option>
                    <option value="started">Started</option>
                    <option value="started">Halfway</option>
                    <option value="finished">Finished</option>
                </select>
            </div>
            <div class="col-sm-2">
                <h3><a href="#">Update</a></h3>
            </div>
        </div>
        EOT;
        }
        footer();
        $conn->close();
        ?>
 
    </div>
</body>

</html>