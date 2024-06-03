<!-- 
    SWAP USING THIRD VARIABLE
a = 20, b = 30  
After swapping,  
a = 30, b = 20  
-->



<?php  
$a = 45;  
$b = 78;  
// Swapping Logic  
$third = $a;  
$a = $b;  
$b = $third;  
echo "After swapping:<br><br>";  
echo "a =".$a."  b=".$b;  
?>    