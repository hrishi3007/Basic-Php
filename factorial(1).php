<!-- The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).
For example,

4! = 4*3*2*1 = 24  
6! = 6*5*4*3*2*1 = 720  


-->



<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body>  
</html>  