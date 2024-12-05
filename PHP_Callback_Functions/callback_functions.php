<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Functions</title>
</head>
<body>

<?php
/**
 * Pass a callback to PHP's array_map() function to calculate the length of every string in an array.
 * @param mixed $item
 * @return string
 */
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
echo "<br>";
?>

<?php
/**
 * Use an anonymous function aa callback for PHP's array_map() function.
 */
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
echo "<br>";
?>

<?php
/**
 * Summary of exclaim
 * @param mixed $str
 * @return string
 */
function exclaim($str) {
    return $str . "! ";
}

/**
 * Summary of ask
 * @param mixed $str
 * @return string
 */
function ask($str) {
    return $str . "? ";
}

/**
 * Summary of printFormatted
 * @param mixed $str
 * @param mixed $format
 * @return void
 */
function printFormatted($str, $format) {
    // Calling the $format callback function 
    echo $format($str);
    echo "<br>";
}

// Pass "exclaim" and "ask" as callback functions to printFormatted().
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>
    
</body>
</html>