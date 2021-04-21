<?php
require_once 'db_connect.php';

if (isset($_POST["submit"])) { // if the input that has the type submit has a value (when clicked)
    $image = $_POST["image"]; // takes the value from the input whose name attribute is equals to first_name using the $POST method
    $name = $_POST["name"]; // takes the value from the input whose name attribute is equals to last_name
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO test (first_name, last_name) VALUES ('$image', '$name', '$price', '$description')";
    // query that creates a new record in the table test. The values come from the form

    if (mysqli_query($connect, $sql) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo  "New record created<br>
            <a href='index.php'>Home</a>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="post">
        <input type="text" name="image" placeholder="image url">
        <input type="text" name="name" placeholder="Type the name of the dish">
        <input type="number" name="price" placeholder="Price of the dish">
        <input type="text" name="description" placeholder="Type the description of the dishe">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>