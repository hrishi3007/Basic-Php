<!-- Function strrev() can also be used to reverse the digits of 23456. -->



<?php  
function reverse($number)  
{  
   /* writes number into string. */  
    $num = (string) $number;  
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
     return $reverse;  
}  
 echo reverse(23456);  
?>   