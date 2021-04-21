<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-3</title>
</head>

<body>
    <?php

    $array = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    for ($a = 0; $a < 10; $a++) {
        $n = rand(0, 10);
        if ($n <= 10) {
            $array[$n]++;
        }
    }
    print_r($array);
    echo "<br>";
    echo ("The max number is:".max($array));
    echo "<br>";

    ?>


    <?php
    // Exercise 3
    // Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. 
    $numbArray = array();
    for ($i = 0; $i <= 10; $i++) {
        $randNumb = mt_rand(1, 100);
        array_push($GLOBALS["numbArray"], $randNumb);
    }
    var_dump($numbArray);
    echo "<br><br>";
    function printMax($a)
    {
        echo ("The max number is:".max($a)."<br>");
        echo ("The min number is:".min($a)."<br>");
    }
    printMax($numbArray);
    ?>

</body>

</html>