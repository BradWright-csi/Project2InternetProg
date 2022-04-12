<!-- 
  connects to the store database
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>Connecting</title>
</head>

<body>
    <?php
    function connect_db()
    {
        $host = "localhost";
        $user = "phpUser";
        $pwd = "Phpadmin@1234";
        $db = "designdb";

        $conn = new mysqli($host, $user, $pwd, $db);

        if ($conn->connect_error) {
            die("Fatal error on connecting DB");
        }

        return $conn;
    }
    ?>
</body>

</html>