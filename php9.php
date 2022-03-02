<html>
<body>
<h1 align="center"><u>FACTORIAL OF A NUMBER USING FUNCTION</u></h1>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num=$_GET['num'];
function factorial(int $catch)
    {
    $factorial=1;
    for($i=1;$i<=$catch-1;$i++)
    {
    $factorial=$factorial*($i+1);
    }
return $factorial;
}
echo"Factorial of $num is".factorial($num);
}
?>
</body>
</html>