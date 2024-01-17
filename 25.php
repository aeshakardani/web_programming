<?php
function swapNumbers(&$a, &$b)
 {
    
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
}
$num1 = 10;
$num2 = 20; 

echo "Before swapping: num1 = $num1, num2 = $num2<br>";
swapNumbers($num1, $num2);

echo "After swapping: num1 = $num1, num2 = $num2";
?>