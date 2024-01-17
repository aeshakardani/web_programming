<?php
function isPalindrome($num) 
{
    
    $numberString = (string)$num;
    
    
    $reversedString = strrev($numberString);
    
    
    return $numberString === $reversedString;
}


$numberToCheck = 121; 

if (isPalindrome($numberToCheck)) 
{
    echo "$numberToCheck is a palindrome.";
} 
else
{
    echo "$numberToCheck is not a palindrome.";
}
?>