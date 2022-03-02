<html>
<body>
<h1>PRINT THE NUMBER</h1>
<form>
<input type="number" placeholder="number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num=$_GET['num'];
$sum=0;
$reverse=0;
$temp=$num;
while($num!=0)
{
$remainder=$num%10;
$reverse=$reverse*10+$remainder;
$sum=$sum+$remainder;
$num=(int)($num/10);
}
echo"Reverse of $temp is $reverse","<br>";
echo"Sum of digits of $reverse is $sum","<br>";
if($temp==$reverse)
{
echo"$temp is palindrome";
}
}
?>
</body>
</html>