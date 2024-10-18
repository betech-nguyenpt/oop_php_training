<!DOCTYPE html>
<html>
<body>

<?php
$x = " Hello World! ";


/*The PHP strlen() function returns the length of a string.*/
echo strlen("Hello world!");
echo "<br>";
/*The PHP str_word_count() function counts the number of words in a string.*/
echo str_word_count("Hello world!");
echo "<br>";
/*The PHP strpos() function searches for a specific text within a string.*/
echo strpos("Hello world!", "world");
echo"<br>";
/*The strtoupper() function returns the string in upper case:*/
echo strtoupper($x);
echo"<br>";
/*The strtolower() function returns the string in lower case:*/
echo strtolower($x);
echo"<br>";
/*The PHP str_replace() function replaces some characters with some other characters in a string.*/
echo str_replace("World", "Tan", $x);
echo "<br>";
/*The PHP strrev() function reverses a string.*/
echo strrev($x);
echo "<br>";
/*(Whitespace is the space before and/or after the actual text, and very often you want to remove this space.)*/
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
echo"<br>";
/*The PHP explode() function splits a string into an array.

The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.*/
$y = explode(" ", $x);
print_r($y);
echo "<br>";
/*To concatenate, or combine, two strings you can use the . operator:*/
$a = "Nguyen";
$b = "Ngoc";
$c = "Tan";
$t = $a . $b . $c ;
echo $t;
echo "<br>";

/*You can add a space character like this:*/
$t = $a . " " . $b . " " .$c;
echo $t;
echo "<br>";

/*By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:*/
$t = "$a $b $c";
echo $t;
echo "<br>";

/*You can return a range of characters by using the substr() function.*/  
echo substr($x, 6, 6);
echo "<br>";
echo substr($t, 12, 3);
echo "<br>";
echo substr($t, 12);
echo "<br>";





  


?>

</body>
</html>
