<html>
<body>
<h1 align="center"><u>FACTORS OF A NUMBER</u></h1>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_GET['Submit']))
{
$num=$_GET['num'];
echo"Factors of $num are<br>";
for($i=1;$i<=$num;$i++)
{
    if($num%$i==0)
    {
        echo $i."\n"."<br>";
    }
    }
}
?>
</body>
</html>