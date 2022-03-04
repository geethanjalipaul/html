<html>
<body>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "ASCENDING ORDER ACCORDING TO VALUE<br>";
asort($age);
foreach($age as $x=>$x_value)
{
    echo"Key=".$x,",Value=".$x_value."<br>";
}
echo "<br>DESCENDING ORDER ACCORDING TO VALUE<br>";
arsort($age);
foreach($age as $y=>$y_value)
{
    echo"Key=".$y,",Value=".$y_value."<br>";
}
echo "<br>ASCENDING ORDER ACCORDING TO KEY<br>";
ksort($age);
foreach($age as $x=>$x_value)
{
    echo"Key=".$x,",Value=".$x_value."<br>";
}
echo "<br>DESCENDING ORDER ACCORDING TO KEY<br>";
krsort($age);
foreach($age as $y=>$y_value)
{
    echo"Key=".$y,",Value=".$y_value."<br>";
}
?>
</body>
</html>