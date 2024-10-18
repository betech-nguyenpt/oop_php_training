<!DOCTYPE html>
<html>
    <body>
            <?php  
            /*The pi() function returns the value of PI:*/
            echo (pi())."<br>"; 
            /*The min() and max() functions can be used to find the lowest or highest value in a list of arguments:*/
            echo(max(0,200,50,-53,-120)) ."<br>";
            echo(min(0,200,50,-53,-120))."<br>";
            /*The abs() function returns the absolute (positive) value of a number:*/
            echo(abs(-152))."<br>";
            /*The sqrt() function returns the square root of a number:*/
            echo(sqrt(64))."<br>";
            echo(sqrt(255))."<br>";
            echo(sqrt(225))."<br>";
            /*The round() function rounds a floating-point number to its nearest integer:*/
            echo(round(12))."<br>";
            echo(round(-1.3))."<br>";
            echo(round(0.49))."<br>";
            echo(round(0.99))."<br>";
            /*The rand() function generates a random number:*/
            echo(rand())."<br>";
            echo(rand())."<br>";
            /*For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):*/
            echo(rand(0,100))."<br>";
           ?> 
    </body>
</html>