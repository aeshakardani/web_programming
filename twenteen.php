<?php
function fact($numb)
 {
    if ($numb == 0 || $numb == 1) 
	{
        return 1; 
    } else {
        return $numb * fact($numb - 1);
    }
}


$num = 5; 

$result = fact($num);

echo "The factorial of $num is: $result";
?>