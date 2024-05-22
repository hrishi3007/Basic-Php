<!-- Declare a variable to store reverse number and initialize it with 0.
Multiply the reverse number by 10, add the remainder which comes after dividing the number by 10. -->



<?php  
$num = 23456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 23456 is: $revnum";  
?>  