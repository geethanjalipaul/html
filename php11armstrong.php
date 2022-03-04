<html>
<body>
<h1 align="center"><u>ARMSTRONG NUMBER OR NOT</u></h1>
<form method="post">
<input type="number" placeholder="number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_POST['num']))
{
$a=$_POST['num'];
$b=$a;
$sum=0;
while($a>=1)
{
   $d=$a%10;
   $c=$d*$d*$d;
   $sum=$sum+$c;
   $a=$a/10;
}
if($b==$sum)
echo"$b is an armstrong number";
else
echo" $b is not an armstrong number";
}
?>
</body>
</html>