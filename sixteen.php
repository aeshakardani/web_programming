<html>
<form action="" method="post">

<input type="text" name="sen_1"></br>
<input type="submit" name="submit">
</form>
</html>
<?php
$val1=$_REQUEST['sen_1'];

$vowels=array('a','e','i','o','u');
$len=strlen($val1);
$num=0;

for($i=0;$i<$len;$i++)
{
	if(in_array($val1[$i],$vowels))
	{
		$num++;
	}
}
echo "number of vowel is:".$num;
?>	