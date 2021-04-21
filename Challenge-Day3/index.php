<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title> DB Restaurant </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<?php include 'navbar.php'?>

<!--     <a href="create.php">create new record </a><br><br>  -->
    <div class="container d-flex flex-wrap p-2">
    <?php

    foreach ($rows as $row) {
        echo "<div class='card m-2 border' style='width: 18rem;'>
                <img src='" . $row['image'] . "' class='card-img-top'>
                <div class='card-body d-flex flex-column justify-content-between'>
                    <h5 class='card-title'>" . $row['name'] . "</h5>
                    <p class='card-text'>" . $row['description'] . "</p>
                    <p class='card-text'>€ " . $row['price']."</p>
                    <a href='delete.php?dishID=" . $row['dishID'] . "' class='btn btn-danger'>Del-eat it</a>
                </div>
            </div>";
    }
    // href=...?dishID => dishID must equal $_GET['dishID']

    ?>


        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>