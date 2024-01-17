<?php
function findLargest($n1, $n2, $n3) 
{
    $largest = $n1;

    
    if ($n2 > $largest) 
	{
        $largest = $n2;
    }

    
    if ($n3 > $largest)
		{
        $largest = $n3;
    }

    return $largest;
}


$n1 = 10; 
$n2 = 25; 
$n3 = 15; 

$largestNumber = findLargest($n1, $n2, $n3);

echo "The largest number among $n1, $n2, and $n3 is: $largestNumber";
?>