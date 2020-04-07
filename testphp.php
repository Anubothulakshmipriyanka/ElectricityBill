<?php
$a=$_GET['num1'];
$result;
if($a<=50)
{
$result=$a*9;
echo "<br>";
}
else if($a>50 && $a<=100)
{
 $temp = 50 * 9;
 $remaining_units = $a - 50;
 $result = $temp + ($remaining_units * 12);
}
else 
{
$temp=(50*9)+(50*12);
$remaining_units=$a-100;
$result=$temp+($remaining_units*15);
}
echo "Electricity bill=".$result; 
?>
