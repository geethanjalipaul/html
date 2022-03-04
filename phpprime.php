<html>
<body>
<h1 align="center"><u>PRIME NUMBERS WITHIN A RANGE</u></h1>
<form method="post">
<input type="number" placeholder="number" name="lower">
<input type="number" placeholder="number" name="upper">
<button type="Submit" name="Submit" value="Submit">
CHECK</button>
</form>
<?php
if(isset($_POST['Submit']))
{
$l=$_POST['lower'];
$u=$_POST['upper'];
$flag=0;
$count=0;
for($i=$l;$i<=$u;$i++)
{
    $flag=0;
  for($j=2;$j<=$i/2;$j=$j+1)
  {
      $c=$i%$j;
      if($c==0)
      {
          $flag=1;
      }
  }
  if($flag==0&&$count==0)
  {
  echo"Prime numbers are<br>";
  $count=1;
  }
  if($flag==0)
  echo" $i";
}
}
?>
</body>
</html>