<!-- A number which is only divisible by 1 and itself is called prime number. Numbers 2, 3, 5, 7, 11, 13, 17, etc. are prime numbers.
2 is the only even prime number.
It is a natural number greater than 1 and so 0 and 1 are not prime numbers. -->



<form method="post">  
Enter a Number: <input type="text" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $input=$_POST['input'];  
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo 'The Number '. $input . ' is not prime';  
}  else {  
   echo 'The Number '. $input . ' is prime';  
   }   
}  
?>  