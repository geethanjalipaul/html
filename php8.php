<html>
<body>
<h1 align="center"><u>REVERSE OF A NUMBER USING FUNCTION</u></h1>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num=$_GET['num'];
function reverse(int $temp)
    {
    $remainder=0;
    $reverse=0;
    while($temp!=0)
    {
    $remainder=$temp%10;
    $reverse=$reverse*10+$remainder;
    $temp=(int)($temp/10);
    }
return $reverse;
}
echo"Reverse of $num is".reverse($num);
}
?>
</body>
</html>