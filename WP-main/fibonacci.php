<?php
$n=6;
$n1=0;
$n2=1;
$i=2;
echo "Fibonacci series upto $";
echo "$n1","<br>";
echo "$n2","<br>";
while ($i<$n){
$n3=$n1+$n2;
echo "$n3","<br>";
$n1=$n2;
$n2=$n3;
$i=$i+1;
}
?>
 