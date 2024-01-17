<?php
function isPrime($number) 
{
    if ($number <= 1)
		{
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) 
	{
        if ($number % $i == 0) 
		{
            return false;
        }
    }
    
    return true;
}


$numberToCheck = 17; 
if (isPrime($numberToCheck))
	{
    echo "$numberToCheck is a prime number.";
}
 else 
{
    echo "$numberToCheck is not a prime number.";
}
?>