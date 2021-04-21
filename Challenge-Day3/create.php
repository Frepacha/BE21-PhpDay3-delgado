<?php
require_once 'db_connect.php';

if (isset($_POST["submit"])) { 
    $image = $_POST["image"]; 
    $name = $_POST["name"]; 
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO dishes (image, name, price, description) VALUES ('$image', '$name', '$price', '$description')";
    // query that creates a new record in the table test. The values come from the form

    if (mysqli_query($connect, $sql) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo  "<div class='container p-5'>Your new dish has been added - return to <a href='index.php' class='text-primary'>Home</a></div>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php' ?>  
<h3 class="container d-flex px-3">Add a new Dish</h3>
    <div class="container d-flex px-3">

        <form method="post" action="create.php"><!-- do not forget in which document the action takes place -->  
            <input type="text" name="image" placeholder="image url"><br><br>
            <input type="text" name="name" placeholder="Type the name of the dish"><br><br>
            <input type="number" name="price" placeholder="Price of the dish"><br><br>
            <input type="text" name="description" placeholder="Type the description of the dishe"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>