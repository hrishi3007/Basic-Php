<!-- The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).
For example,

4! = 4*3*2*1 = 24  
6! = 6*5*4*3*2*1 = 720  


-->



<?php  
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  