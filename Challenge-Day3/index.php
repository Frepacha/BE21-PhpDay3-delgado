<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title> connecting to DB Restaurant </title>
</head>

<body>
    <a href="create.php">create new record </a><br><br> <!-- we will create this file later -->

    <?php
    $i = 0;
    while ($i < count($rows)) {
        echo "<p>" .$rows[$i][ 'image']." ".$rows[$i]['name' ]." ".$rows[$i]['price' ]." ".$rows[$i]['description' ]. " <a href='delete.php?id=" .$rows[$i]['id']."'>delete</a></p>" ;
        $i++;
    }

    // foreach ($rows as $row) {
    //     echo "<p>" .$row['first_name']." ".$row['last_name' ]."</p>";
    // }
    ?>
</body>

</html>