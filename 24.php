<?php
function calculateSquareRoot($number)
 {
    
    $squareRoot = sqrt($number);
    return $squareRoot;
}


$number = 25;
$squareRoot = calculateSquareRoot($number);

echo "The square root of $number is: $squareRoot";
?>