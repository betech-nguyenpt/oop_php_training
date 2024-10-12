<?php
// variable declaration
$a = 5;
$b = 10;
$c = 15;
$d = 20;

/**
 * Perform complex calculations.
 * The calculation follows the order of operations:
 * 1. Multiplication and Division
 * 2. Addition and Subtraction
 */
$result = $a + $b * $c - $d / 5 + ($a * $c - $b);

// Result
// B1: * & /
// $b * $c = 10 * 15 = 150
// $d / 5 = 20 / 5 = 4

// B2: Instead of expression
// $result = 5 + 150 - 4 + (5 * 15 - 10)

// B3: Calculate the multiplication in parentheses
// 5 * 15 = 75
// $result = 5 + 150 - 4 + (75 - 10)

// B4: Calculation in brackets
// 75 - 10 = 65

// B5: Instead of expression
// $result = 5 + 150 - 4 + 65

// B6: + & -
// 5 + 150 = 155
// 155 - 4 = 151
// 151 + 65 = 216

printf("Result: %d\n", $result); // Output: Result: 216

// Example with conditional operator
$isAdult = true;
$status = $isAdult ? "Adult" : "Minor";
printf("Status: %s\n", $status); // Output: Status: Adult

// Example with AND and OR operators
$x = 7;
$y = 10;
$z = 5;

// Comparison operator
$result = ($x > $y && $y > $z) || ($x < $z);
printf("Logical Result: %s\n", $result ? "True" : "False");// Output: False
?>