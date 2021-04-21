<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-3</title>
</head>
<body>
<!-- Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. -->

<?php    
$array = array(1, 2, 3, 4, 5);

function randarray($array){
    echo "$array[0], $array[1]";
}
//srand(randarray($array));

?>

<?php

$r = array(0,0,0,0,0,0,0,0,0,0,0);
for ($i=0; $i < 1000000; $i++) {
  $n = rand(0, 1000000);
  if ($n <= 10) {
    $r[$n]++;
  }
}
print_r($r);

?>

</body>
</html>