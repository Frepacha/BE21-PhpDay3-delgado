<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<!-- Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. -->

<h3>Array</h3>
<?php
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($array as $value) {
        echo "Value is $value <br/>";
    }
    //Output:
    //Value is 1
    //Value is 2
    //Value is 3
    //Value is 4
    //Value is 5...
?>
<h3>Array 2</h3>
<?php
    $array2 = array("One"=>1, "Two"=>2, "Three"=>3, "Four"=>4, "Five"=>5, "Six"=>6, "Seven"=>7, "Eigth"=>8, "Nine"=>9, "Ten"=>10);
    foreach ($array2 as $key=>$value) {
        echo "The Key is: $key and the Value is: $value <br/>";
    }
    //echo "The Key is: $key and the Value is $value <br/>";
    //Output:

?>

</body>
</html>

