<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>

    <!-- Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop.  -->
    <h3 style=color:brown>For loop</h3>
    <?php
    $name = "Freddy";
    for ($i = 0; $i < 50; $i++) {
        echo ("The index is: $i and my name is: $name <br>");
    };


    ?>
    <h3 style=color:rebeccapurple>While loop</h3>

    <?php
    $i = 0;
    $name2 = "Freddy Roland";
    while ($i < 50) {
        $i++; // is important not forget the condition to increase the index
        echo ("The index is: $i and my name is: $name2 <br>");
    }
    ?>

    <h3 style=color:green> Do While loop</h3>

    <?php
    $i = 0;
    $name3 = "Freddy Delgado";

    do {
        $i++;
        echo ("The index is: $i and my name is: $name3 <br>");
    } while ($i < 50);
 // is important not forget the condition to increase the index
    ?>



</body>

</html>