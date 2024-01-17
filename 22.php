<?php
function cal($radius)
 {
    
    $area = M_PI * pow($radius, 2);
    return $area;
}


$radius = 10; 
$area = cal($radius);

echo "The area of the circle with radius $radius is: $area ";
?>