<html>
<body>
<h1 align="center">NEON NUMBER </h1>
<form method="get">
<input type="number" placeholder="enter number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num=$_GET['num'];
$sqr=$num*$num;
$sum=0;
while($sqr>0)
{
  $sum=$sum+$sqr%10;
  $sqr=$sqr/10;
}
if($num==$sum)
  echo $num." is a Neon number";
else
  echo $num."is not a neon number";
}
?>
</body>
</html>