<html>
<body>
<h1 align="center">EVEN NUMBER BETWEEN 2 NUMBERS</h1>
<form method="get">
<input type="number" placeholder="first number" name="num1">
<input type="number" placeholder="second number" name="num2">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num1=$_GET['num1'];
$num2=$_GET['num2'];
echo"Even numbers between $num1 & $num2 are:","<br>";
for($i=$num1;$i<$num2;$i++)
{
if($i%2==0)
{
echo"$i","<br>";
}
}
}
?>
</body>
</html>