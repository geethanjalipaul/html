<?php
$a=array(20,15,8,1,14,2);
echo("ARRAY BEFORE SORTING<br>");
foreach($a as $i)
{
echo"$i"."\n";
}
echo("<br><br>ARRAY AFTER SORTING<br>");
arraysort($a);
function arraysort($a)
{
$n=count($a);
for($i=0;$i<$n-1;$i++)
{	
	{
	for($j=$i+1;$j<$n;$j++)
	{
	if($a[$i]>$a[$j])
		{
		$temp=$a[$i];
		$a[$i]=$a[$j];
		$a[$j]=$temp;
		}
	}
	}
}
foreach($a as $i)
{
echo "$i"."\n";
}
}
?>