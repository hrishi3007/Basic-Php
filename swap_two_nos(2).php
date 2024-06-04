<!-- 
    SWAP USING THIRD VARIABLE
a = 20, b = 30  
After swapping,  
a = 30, b = 20  
-->



<?php  
$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
?>      