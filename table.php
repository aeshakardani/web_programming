<?php

$start=$_REQUEST ['start_val'];
$end=$_REQUEST['end_val'];

for($i=$start;$i<=$end;$i++)
{
	echo "<table cellpanding=5 cellspacing=5 border=5 align=center>";
	for($j=1;$j<=10;$j++)
    {
      echo "<tr>";
      $mul=$i*$j;
		echo "<td>".$i." * ".$j." = ".$mul."</td>";
		echo"</tr>";
	}
echo "</table><style> table{float:left;}</style>";
}
?>	

=