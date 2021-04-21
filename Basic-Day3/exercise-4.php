<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    
<!-- Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
e.g.  -->
<?php
function fullstack($n) {
    for ($n = 1; $n <= 100; $n++)
if($n <= 0) 
    echo "Invalid";
else
    if($n%3 == 0 && $n%5 == 0){
        echo 'Full-Stack <br>';
    }else if($n%3 == 0){
        echo "Bank-End <br>";
    }else if($n%5 == 0){
        echo "Front-End <br>";
    }else{
        echo $n. "<br>";
    }
    echo "\n";
}
echo fullstack(0);

?>

</body>
</html>